<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:191',
            'area_id' => 'required|numeric',
            'neighborhood' => 'required|max:191',
            'mobile' => 'required|unique:news_letters|numeric',
            'email' => 'required|unique:news_letters|string|email|max:191',
        ]);

        NewsLetter::create($request->all());
        return 'OK';
    }
}
