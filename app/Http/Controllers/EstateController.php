<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\AuctionEstate;
use App\Category;
use App\Estate;
use App\EstateImage;
use App\Http\Requests\EstateFormRequest;
use App\LocalEstate;
use App\RequestEstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($adSort)
    {
        $adSortId = DB::table('ad_sort')->whereName($adSort)->pluck('id');
        $adSort = DB::table('ad_sort')->whereName($adSort)->first();

        $estates = Estate::whereAdSortId($adSortId)->paginate(6);

        foreach($estates as $estate){
            $estate->sortName = Estate::getSort($estate->sort_id);
            $estate->offerName = Estate::getOffer($estate->offer_id);
            $estate->advertiser = Advertiser::where('estate_id',$estate->id)->first();
            //$estate->areaName = Estate::getMainArea($estate->area_id);

            //TODO :- Check About AdsortID To Avoid Mistakes

        switch ($adSort) {
            
            case 'auction_estate':
                $estate->localAuctionEstate = AuctionEstate::getData($estate->id);
                $estate->priceSortName = AuctionEstate::getPriceSort($estate->localAuctionEstate->price_sort_id);
                $estate->paymentSortName = AuctionEstate::getPaymentSort($estate->localAuctionEstate->payment_sort_id);
               
                break;
            case 'local_estate':
                $estate->localAuctionEstate = LocalEstate::getData($estate->id);
                $estate->priceSortName = LocalEstate::getPriceSort($estate->localAuctionEstate->price_sort_id);
                $estate->paymentSortName = LocalEstate::getPaymentSort($estate->localAuctionEstate->payment_sort_id);
              
                break;
                
        }

        }
        
        return view('main.estates.index', ['estates' => $estates, 'adSort' => $adSort]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($adSort)
    {
        return view('main.estates.create', 
        [
            'adSort' => Estate::checkAdSort($adSort),
            'categories' => Category::getVisibleCategories(),
            'sorts' => Estate::getAllSorts(),
            'offers' => Estate::getAllOffers(),
            'destinations' => Estate::getAllDestinations(),
            'priceSorts' => Estate::getAllPriceSorts(),
            'paymentSorts' => Estate::getAllPaymentSorts(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($adSort, EstateFormRequest $request)
    {

        $latlngArray = explode(',' , $request->input('latlng'));
        
        $request->merge(['code' => rand(10,5000), 'ad_sort_id' => DB::table('ad_sort')->whereName($adSort)->pluck('id')[0], 'lat' => $latlngArray[0] , 'lng' => $latlngArray[1] , 'user_id' => auth()->user()->id]);

        $estate = Estate::create($request->only('user_id','code','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng'));
        
        $request->merge(['estate_id' => $estate->id]);


        switch ($adSort) {
            case 'auction_estate':
                AuctionEstate::create($request->except('agree','estateimages','duration_publish','adSort','user_id','latlng','g-recaptcha-response','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
            case 'local_estate':
                LocalEstate::create($request->except('agree','estateimages','duration_publish','adSort','user_id','latlng','g-recaptcha-response','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
            case  'request_estate':
                RequestEstate::create($request->except('agree','estateimages','duration_publish','adSort','user_id','latlng','g-recaptcha-response','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
        }

        Advertiser::create($request->only('estate_id','advertiser_sort_id','name','mobile1','mobile2','telephone','fax','central','email','website'));

      
        //EstateImage::create($request->only('estate_id','images'));

        if($request->hasfile('estateimages'))
         {
            $estate_name = $request->name;

            foreach($request->file('estateimages') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->storePubliclyAs("public/estates/${estate_name}", $name);  
                $data[] = $name;  
            }
         }

         $estateimage= new EstateImage();
         $estateimage->img=json_encode($data);
         $estateimage->estate_id=$request->estate_id;
        
        $estateimage->save();

        return redirect('estates/'.$adSort.'/'.$estate->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function show($adSort, Estate $estate)
    {
        views($estate)->record();
        $estate->advertiser = Advertiser::where('estate_id',$estate->id)->first();
        $adSort = Estate::checkAdSort($adSort);
        $estate_name = $estate->name;
        $images = json_decode($estate->images->img);
        $storage_images = [];
        foreach($images as $image){
            $image = asset("storage/estates/${estate_name}/${image}");
            array_push($storage_images, $image);
        }

        //dd($storage_images);
        $estate->images = $storage_images;

        //TODO :- Check About AdsortID To Avoid Mistakes

        switch ($adSort->name) {
            
            case 'auction_estate':
                $localAuctionEstate = AuctionEstate::getData($estate->id);
                
                return view('main.estates.show' , 
                [
                    'estate' => $estate,
                    'views' => views($estate)->unique()->count(),
                    'adSort' => $adSort,
                    'sortName' => Estate::getSort($estate->sort_id),
                    'offerName' => Estate::getOffer($estate->offer_id),
                    'areaName' => Estate::getMainArea($estate->area_id),
                    'localAuctionEstate' => $localAuctionEstate,
                    'priceSortName' => AuctionEstate::getPriceSort($localAuctionEstate->price_sort_id),
                    'paymentSortName' => AuctionEstate::getPaymentSort($localAuctionEstate->payment_sort_id),
                ]);
                break;
            case 'local_estate':
                $localAuctionEstate = LocalEstate::getData($estate->id);
                
                return view('main.estates.show' , 
                [
                    'estate' => $estate,
                    'views' => views($estate)->unique()->count(),
                    'adSort' => $adSort,
                    'sortName' => Estate::getSort($estate->sort_id),
                    'offerName' => Estate::getOffer($estate->offer_id),
                    'areaName' => Estate::getMainArea($estate->area_id),
                    'localAuctionEstate' => $localAuctionEstate,
                    'priceSortName' => LocalEstate::getPriceSort($localAuctionEstate->price_sort_id),
                    'paymentSortName' => LocalEstate::getPaymentSort($localAuctionEstate->payment_sort_id),
                ]);
                break;
                case 'global_estate' || 'project_estate':
                    return view('main.estates.show' , 
                    [
                        'estate' => $estate,
                        'views' => views($estate)->unique()->count(),
                        'adSort' => $adSort,
                        'sortName' => Estate::getSort($estate->sort_id),
                        'offerName' => Estate::getOffer($estate->offer_id),
                        'areaName' => Estate::getMainArea($estate->area_id),
                    ]);
                    break;
                
                case 'schema_estate':
                    return view('main.estates.show' , 
                    [
                        'estate' => $estate,
                        'views' => views($estate)->unique()->count(),
                        'adSort' => $adSort,
                        'areaName' => Estate::getMainArea($estate->area_id),
                    ]);
                    break;
        }

       
         
    
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function edit($adSort, Estate $estate)
    {

        $estate_name = $estate->name;
        $images = json_decode($estate->images->img);
        $storage_images = [];
        foreach($images as $image){
            $image = asset("storage/estates/${estate_name}/${image}");
            array_push($storage_images, $image);
        }

        //dd($storage_images);
        $estate->images = $storage_images;

        $bladeVariables = [
            'estate' => $estate,
            'adSort' => Estate::checkAdSort($adSort),
            'categories' => Category::getVisibleCategories(),
            'sorts' => Estate::getAllSorts(),
            'offers' => Estate::getAllOffers(),
            'destinations' => Estate::getAllDestinations(),
            'priceSorts' => Estate::getAllPriceSorts(),
            'paymentSorts' => Estate::getAllPaymentSorts(),
        ];


        switch ($adSort) {
            case 'local_estate':
                $bladeVariables['local_auction_estate'] = LocalEstate::whereEstateId($estate->id)->firstOrFail();
                break;
            case 'request_estate':
                $bladeVariables['request_estate'] = RequestEstate::whereEstateId($estate->id)->firstOrFail();
                break;
            case 'auction_estate':
                $bladeVariables['local_auction_estate'] = AuctionEstate::whereEstateId($estate->id)->firstOrFail();
                break;
        }

       

        return view('main.estates.edit', $bladeVariables);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function update($adSort, EstateFormRequest $request, Estate $estate)
    {
        $latlngArray = explode(',' , $request->input('latlng'));
        
        $request->merge(['code' => rand(10,5000), 'ad_sort_id' => DB::table('ad_sort')->whereName($adSort)->pluck('id')[0], 'lat' => $latlngArray[0] , 'lng' => $latlngArray[1] , 'user_id' => auth()->user()->id]);

        $estate->update($request->only('user_id','code','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng'));
        
        $request->merge(['estate_id' => $estate->id]);


        switch ($adSort) {
            case 'auction_estate':
                AuctionEstate::whereEstateId($estate->id)->update($request->except('_method','_token','agree','estateimages','duration_publish','adSort','user_id','latlng','g-recaptcha-response','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
            case 'local_estate':
                LocalEstate::whereEstateId($estate->id)->update($request->except('_method','_token','agree','estateimages','duration_publish','adSort','user_id','latlng','g-recaptcha-response','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
            case  'request_estate':
                RequestEstate::whereEstateId($estate->id)->update($request->except('_method','_token','agree','estateimages','duration_publish','adSort','user_id','latlng','g-recaptcha-response','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
        }

        Advertiser::whereEstateId($estate->id)->update($request->only('estate_id','advertiser_sort_id','name','mobile1','mobile2','telephone','fax','central','email','website'));

      
        //EstateImage::create($request->only('estate_id','images'));

        if($request->hasfile('estateimages'))
        {
            $estate_name = $request->name;

            foreach($request->file('estateimages') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->storePubliclyAs("public/estates/${estate_name}", $name);  
                $data[] = $name;  
            }
        }

        $estateimage= new EstateImage();
        $estateimage->img=json_encode($data);
        $estateimage->estate_id=$request->estate_id;
        
        $estateimage->update();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estate $estate)
    {
        $estate->delete();
        return redirect('/home');
    }
}