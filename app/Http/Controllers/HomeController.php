<?php

namespace App\Http\Controllers;

use App\Client;
use App\Portfolio;
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
        return view('main.welcome', ['clients' => Client::all(), 'portfolios' => Portfolio::all(), 'teams' => DB::table('teams')->join('users','users.id','=','user_id')->get(), 'adSorts' => DB::table('ad_sort')->pluck('display') ]);
    } 

    public function index()
    {
        return view('main.home');
    }
}
