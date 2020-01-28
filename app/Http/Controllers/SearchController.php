<?php

namespace App\Http\Controllers;

use App\Advertiser;
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
use App\Filters\EstateFilter;
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
use App\Filters\PriceSortFilter;
use App\Filters\ReceptionsNumberFilter;
use App\Filters\RoomsNumberFilter;
use App\Filters\SchemaNameFilter;
use App\Filters\SchemaNumberFilter;
use App\Filters\SewerageNetworkFilter;
use App\Filters\SortFilter;
use App\Filters\StoresNumberFilter;
use App\Filters\StreetFilter;
use App\Filters\StreetsNumberFilter;
use App\Filters\UnitNumberFilter;
use App\Filters\UnitsNumberFilter;
use App\Filters\WaterNetworkFilter;
use App\LocalEstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index($adSort = null)
    {  
        if($adSort == null){
            
        }else{
            
        }
        return view('main.estates.search', 
        [
            'categories' => Category::getVisibleCategories(),
            'sorts' => Estate::getAllSorts(),
            'offers' => Estate::getAllOffers(),
            'destinations' => Estate::getAllDestinations(),
            'priceSorts' => Estate::getAllPriceSorts(),
            'paymentSorts' => Estate::getAllPaymentSorts(),
            'result' => 0
        ]);
    }

    public function searchByAdSort($adSort)
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

        //return json_encode($estates);
        return view('main.estates.index', ['estates' => $estates, 'adSort' => $adSort]);
    }


    public function getFilters()
    {
        //old
        //$this->estates->filter($this->filters(request()))->get();
        //dd(Estate::filter($this->filters())->get());


        return view('main.estates.search', 
        [
            'adSort' => Estate::checkAdSort('local_estate'),
            'categories' => Category::getVisibleCategories(),
            'sorts' => Estate::getAllSorts(),
            'offers' => Estate::getAllOffers(),
            'destinations' => Estate::getAllDestinations(),
            'priceSorts' => Estate::getAllPriceSorts(),
            'paymentSorts' => Estate::getAllPaymentSorts(),
            'result' => 1,
            'results' => Estate::filter($this->filters())->paginate(6),
        ]);
    }

    protected function filters()
    {
        //old
        /*return [
            'category' => request('category'),
        ];*/

        return [
            'category' => new CategoryFilter,
            'area' => new AreaFilter,
            'center' => new CenterFilter,
            'neighborhood' => new NeighborhoodFilter,
            'street' => new StreetFilter,
            'ad_sort_id' => new AdSortFilter,
            'sort_id' => new SortFilter,
            'offer_id' => new OfferFilter,
            'age' => new AgeFilter,
            'date' => new AuctionDateFilter,
            'basement' => new BasementFilter,
            'bathrooms_number' => new BathroomsNumberFilter,
            'block_number' => new BlockNumberFilter,
            'building_design' => new BuildingDesignFilter,
            'building_space' => new BuildingSpaceFilter,
            'delivery_method' => new DeliveryMethodFilter,
            'destination_filter' => new DestinationFilter,
            'docs' => new DocsFilter,
            'electricity_network' => new ElectricityNetworkFilter,
            'floor_number' => new FloorNumberFilter,
            'floors_number' => new FloorsNumberFilter,
            'floor_tanks_sort' => new FloorTanksSortFilter,
            'gas_network_filter' => new GasNetworkFilter,
            'kitchens_number_filter' => new KitchensNumberFilter,
            'lifts_number_filter' => new LiftsNumberFilter,
            'overhead_tanks_sort' => new OverheadTanksSortFilter,
            'parking_filter' => new ParkingFilter,
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
        ];

        
    }
}
