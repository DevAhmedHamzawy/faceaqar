<?php

namespace App\Http\Controllers;

use App\setting;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

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
     * Display the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('main.contact');
    }

}
