<?php

namespace App\Http\Controllers;

use App\Estate;
use Illuminate\Http\Request;
use App\Advertiser;
use App\LocalEstate;
use Illuminate\Support\Facades\DB;

class EstatesMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function show($adSort)
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
        return view('main.estates.map', ['estates' => $estates, 'adSort' => $adSort]);
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
