<?php

namespace App\Http\Controllers;

use App\AdCardBroker;
use App\Area;
use App\Broker;
use App\Client;
use App\Estate;
use App\ImageBroker;
use App\Page;
use App\Portfolio;
use App\Role;
use App\SocialAccountBroker;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function welcome()
    {
        $sliders = [];
        $sliders = Broker::with('images')->get();
        //$slider2 = AdCardBroker::get();
        //$sliders = array_merge($slider1,$slider2);
        
        return view('main.welcome', ['clients' => Client::all(), 'portfolios' => Portfolio::all(), 'teams' => DB::table('teams')->join('users','users.id','=','user_id')->get(), 'adSorts' => DB::table('ad_sort')->pluck('id','display'), 'pages' => Page::getParents(), 'sliders' => $sliders, 'tickers' => Broker::all(), 'mostViewed' => Estate::orderByViews()->limit(12)->get() , 'newEstates' => Estate::limit(8)->ordered(), 'estateOffices' =>  User::withRole(['estate_office','estate_agency','estate_company','estate_auction_office','engineering_office'])->limit(12)->get() , 'projectEstates' => Estate::whereAdSortId(4)->limit(8)->ordered() , 'auctionEstates' => Estate::whereAdSortId(6)->limit(8)->ordered() , 'requestEstates' => Estate::whereAdSortId(5)->limit(8)->ordered() ]);
    } 

    public function index()
    {
        return view('main.home', ['roles' => Role::where('name', '!=', 'lawyer')->get()]);
    }

    public function services()
    {
        return view('main.services');
    }

    public function branches()
    {
        return view('main.branches');
    }

    public function financial_fees()
    {
        return view('main.financial_fees');
    }

    public function payment_methods()
    {
        return view('main.payment_methods');
    }

    public function thanks()
    {
        return view('main.thanks');
    }
}
