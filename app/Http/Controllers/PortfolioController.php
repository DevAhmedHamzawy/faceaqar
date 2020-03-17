<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('main.portfolios', ['portfolios' => Portfolio::all()]);
    }
}
