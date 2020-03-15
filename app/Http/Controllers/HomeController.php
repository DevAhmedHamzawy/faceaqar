<?php

namespace App\Http\Controllers;

use App\Area;
use App\Client;
use App\Page;
use App\Portfolio;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome()
    {
        return view('main.welcome', ['clients' => Client::all(), 'portfolios' => Portfolio::all(), 'teams' => DB::table('teams')->join('users','users.id','=','user_id')->get(), 'adSorts' => DB::table('ad_sort')->pluck('display'), 'pages' => Page::getParents() ]);
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
