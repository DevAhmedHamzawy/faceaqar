<?php

namespace App\Http\Controllers;

use App\Estate;
use Illuminate\Http\Request;
use App\Advertiser;
use App\LocalEstate;
use App\User;
use Illuminate\Support\Facades\DB;

class EstatesMapController extends Controller
{

    public function show($adSort)
    {
        $adSortId = DB::table('ad_sort')->whereName($adSort)->pluck('id');
        $adSort = DB::table('ad_sort')->whereName($adSort)->first();

        if($adSort->name !== 'office_estate'){

            $estates = Estate::whereAdSortId($adSortId)->orderByDesc('created_at')->get();

        }else{
            $adSort->name == 'office_estate' ? $estates = User::withRole('estate_office')->get() : $estates = Broker::get();
        }

        if($adSort->name !== 'office_estate'){
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
        }else{
            $estates =  $estates->filter(function ($item) {
                return $item->profile !== null;
            })->values();
            foreach($estates as $estate){
                if(!empty($estate->profile)){
                $estate->lat = $estate->profile->lat;
                $estate->lng = $estate->profile->lng;
                }
            }
        }

        //return json_encode($estates);
        return view('main.estates.map', ['estates' => $estates, 'adSort' => $adSort]);
    }

}
