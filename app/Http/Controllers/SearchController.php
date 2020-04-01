<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\AuctionEstate;
use App\Broker;
use App\Category;
use App\Estate;
use App\Filters\AdSortFilter;
use App\Filters\AgeFilter;
use App\Filters\AreaFilter;
use App\Filters\AuctionDateFilter;
use App\Filters\BasementFilter;
use App\Filters\BathroomsNumberFilter;
use App\Filters\BlockNumberFilter;
use App\Filters\BuildingDesignFilter;
use App\Filters\BuildingSpaceFilter;
use App\Filters\CategoryFilter;
use App\Filters\CenterFilter;
use App\Filters\DeliveryMethodFilter;
use App\Filters\DestinationFilter;
use App\Filters\DocsFilter;
use App\Filters\ElectricityNetworkFilter;
use App\Filters\FloorNumberFilter;
use App\Filters\FloorsNumberFilter;
use App\Filters\FloorTanksSortFilter;
use App\Filters\GasNetworkFilter;
use App\Filters\KitchensNumberFilter;
use App\Filters\LiftsNumberFilter;
use App\Filters\NeighborhoodFilter;
use App\Filters\OfferFilter;
use App\Filters\OverheadTanksSortFilter;
use App\Filters\ParkingFilter;
use App\Filters\PaymentSortFilter;
use App\Filters\PieceNumberFilter;
use App\Filters\PriceFilter;
use App\Filters\PriceSortFilter;
use App\Filters\NameFilter;
use App\Filters\ReceptionsNumberFilter;
use App\Filters\RoleFilter;
use App\Filters\RoomsNumberFilter;
use App\Filters\SchemaNameFilter;
use App\Filters\SchemaNumberFilter;
use App\Filters\SewerageNetworkFilter;
use App\Filters\SortFilter;
use App\Filters\SpaceFilter;
use App\Filters\StoresNumberFilter;
use App\Filters\StreetFilter;
use App\Filters\StreetsNumberFilter;
use App\Filters\UnitNumberFilter;
use App\Filters\UnitsNumberFilter;
use App\Filters\WaterNetworkFilter;
use App\LocalEstate;
use App\RequestEstate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index($adSort = null)
    {
        $adSort == 'general' || $adSort == 'filters' ? : $adSort = Estate::checkAdSort($adSort);
        
        return view('main.estates.search', 
        [
            'categories' => Category::getVisibleCategories(),
            'sorts' => Estate::getAllSorts(),
            'offers' => Estate::getAllOffers(),
            'destinations' => Estate::getAllDestinations(),
            'priceSorts' => Estate::getAllPriceSorts(),
            'paymentSorts' => Estate::getAllPaymentSorts(),
            'result' => 0,
            'adSort' => $adSort,
        ]);
    }

    public function searchByAdSort($adSort)
    {
        $adSortId = DB::table('ad_sort')->whereName($adSort)->pluck('id');
        $adSort = DB::table('ad_sort')->whereName($adSort)->first();

        if($adSort->name !== 'office_estate' && $adSort->name !== 'broker_estate'){

            $estates = Estate::whereAdSortId($adSortId)->orderByDesc('created_at')->paginate(16);

        }else{
            $adSort->name == 'office_estate' ? $estates = User::withRole('estate_office')->paginate(16) : $estates = Broker::paginate(16);
        }

        if($adSort->name !== 'office_estate' && $adSort->name !== 'broker_estate'){

        foreach($estates as $estate){
            $estate->sortName = Estate::getSort($estate->sort_id);
            $estate->offerName = Estate::getOffer($estate->offer_id);
            $estate->advertiser = Advertiser::where('estate_id',$estate->id)->first();
            //$estate->areaName = Estate::getMainArea($estate->area_id);

              //TODO :- Check About AdsortID To Avoid Mistakes

        switch ($adSort) {
            
            case 'auction_estate':
                $estate->localAuctionEstate = AuctionEstate::getData($estate->id);
                $estate->priceSortName = AuctionEstate::getPriceSort($estate->localAuctionEstate->price_sort_id ?? '');
                $estate->paymentSortName = AuctionEstate::getPaymentSort($estate->localAuctionEstate->payment_sort_id ?? '');
               
                break;
            case 'local_estate':
                $estate->localAuctionEstate = LocalEstate::getData($estate->id);
                $estate->priceSortName = LocalEstate::getPriceSort($estate->localAuctionEstate->price_sort_id);
                $estate->paymentSortName = LocalEstate::getPaymentSort($estate->localAuctionEstate->payment_sort_id);
              
                break;
                
        }

        }
        }

        //return json_encode($estates);
        return view('main.estates.index', ['estates' => $estates, 'adSort' => $adSort]);
    }


    public function getFilters(Request $request, $adSort)
    {
        //dd($adSort);
        //dd($request->all());
        //dd(Estate::filter($this->filters())->get());

        if($adSort != 'office_estate'){
        
        $estates = Estate::filter($this->filters())->paginate(6);
        foreach($estates as $estate){
            $estate->sortName = Estate::getSort($estate->sort_id);
            $estate->offerName = Estate::getOffer($estate->offer_id);
            $estate->advertiser = Advertiser::where('estate_id',$estate->id)->first();
            //$estate->areaName = Estate::getMainArea($estate->area_id);

              //TODO :- Check About AdsortID To Avoid Mistakes

        switch ($adSort) {
            
            case 'auction_estate':
                $estate->localAuctionEstate = AuctionEstate::getData($estate->id);
                $estate->priceSortName = AuctionEstate::getPriceSort($estate->localAuctionEstate->price_sort_id ?? '');
                $estate->paymentSortName = AuctionEstate::getPaymentSort($estate->localAuctionEstate->payment_sort_id ?? '');
               
                break;
            case 'local_estate':
                $estate->localAuctionEstate = LocalEstate::getData($estate->id);
                $estate->priceSortName = LocalEstate::getPriceSort($estate->localAuctionEstate->price_sort_id ?? '');
                $estate->paymentSortName = LocalEstate::getPaymentSort($estate->localAuctionEstate->payment_sort_id ?? '');
              
                break;
            case 'request_estate':
                $estate->localAuctionEstate = RequestEstate::getData($estate->id);

                break;
                
        }
        }

        }else{
            $estates = User::filter($this->filters())->paginate(6);
        }


        $adSort == 'general' ? : $adSort = Estate::checkAdSort($adSort);
        return view('main.estates.search', 
        [
            'adSort' => $adSort,
            'categories' => Category::getVisibleCategories(),
            'sorts' => Estate::getAllSorts(),
            'offers' => Estate::getAllOffers(),
            'destinations' => Estate::getAllDestinations(),
            'priceSorts' => Estate::getAllPriceSorts(),
            'paymentSorts' => Estate::getAllPaymentSorts(),
            'result' => 1,
            'results' => $estates,
        ]);
    }

    protected function filters()
    {
        return [
            'category' => new CategoryFilter,
            'area' => new AreaFilter,
            'center' => new CenterFilter,
            'neighborhood' => new NeighborhoodFilter,
            'street' => new StreetFilter,
            'sort_id' => new SortFilter,
            'offer_id' => new OfferFilter,
            'age' => new AgeFilter,
            'date' => new AuctionDateFilter,
            'basement' => new BasementFilter,
            'bathrooms_number' => new BathroomsNumberFilter,
            'space' => new SpaceFilter,
            'price' => new PriceFilter,
            'block_number' => new BlockNumberFilter,
            'building_design' => new BuildingDesignFilter,
            'building_space' => new BuildingSpaceFilter,
            'delivery_method' => new DeliveryMethodFilter,
            'destination_id' => new DestinationFilter,
            'docs' => new DocsFilter,
            'electricity_network' => new ElectricityNetworkFilter,
            'floor_number' => new FloorNumberFilter,
            'floors_number' => new FloorsNumberFilter,
            'floor_tanks_sort' => new FloorTanksSortFilter,
            'gas_network' => new GasNetworkFilter,
            'kitchens_number' => new KitchensNumberFilter,
            'lifts_number' => new LiftsNumberFilter,
            'overhead_tanks_sort' => new OverheadTanksSortFilter,
            'parking' => new ParkingFilter,
            'payment_sort' => new PaymentSortFilter,
            'piece_number' => new PieceNumberFilter,
            'price_sort' => new PriceSortFilter,
            'receptions_number' => new ReceptionsNumberFilter,
            'rooms_number' => new RoomsNumberFilter,
            'schema_name' => new SchemaNameFilter,
            'schema_number' => new SchemaNumberFilter,
            'sewerage_network' => new SewerageNetworkFilter,
            'stores_number' => new StoresNumberFilter,
            'streets_number' => new StreetsNumberFilter,
            'unit_number' => new UnitNumberFilter,
            'units_number' => new UnitsNumberFilter,
            'water_network' => new WaterNetworkFilter,
            'name' => new NameFilter,
            'office_role' => new RoleFilter, 
            'ad_sort_id' => new AdSortFilter,
        ];

        
    }
}
