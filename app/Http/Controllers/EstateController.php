<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\AuctionEstate;
use App\Category;
use App\Estate;
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

        $estates = Estate::whereAdSortId($adSortId)->get();

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
    public function store($adSort, Request $request)
    {
        $request->merge(['code' => rand(10,5000), 'ad_sort_id' => DB::table('ad_sort')->whereName($adSort)->pluck('id')[0], 'lat' => 0, 'lng' => 0]);

        $estate = Estate::create($request->only('code','ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng'));
        
        $request->merge(['estate_id' => $estate->id]);


        switch ($adSort) {
            case 'auction_estate':
                AuctionEstate::create($request->except('ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
            case 'local_estate':
                LocalEstate::create($request->except('ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
            case  'request_estate':
                RequestEstate::create($request->except('ad_sort_id','area_id','category_id','sort_id','offer_id','premium_id','duration_id','center','neighborhood','street','address','name','youtube','description','lat','lng','choice-type','namefield6','code','advertiser_sort_id','advertiser_name','mobile1','mobile2','telephone','fax','central','website','email'));
                break;
        }

        Advertiser::create($request->only('estate_id','advertiser_sort_id','name','mobile1','mobile2','telephone','fax','central','email','website'));
        
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
        $estate->advertiser = Advertiser::where('estate_id',$estate->id)->first();
        $adSort = Estate::checkAdSort($adSort);

        //TODO :- Check About AdsortID To Avoid Mistakes

        switch ($adSort->name) {
            
            case 'auction_estate':
                $localAuctionEstate = AuctionEstate::getData($estate->id);

                return view('main.estates.show' , 
                [
                    'estate' => $estate,
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
    public function edit(Estate $estate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estate $estate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estate $estate)
    {
        //
    }
}
