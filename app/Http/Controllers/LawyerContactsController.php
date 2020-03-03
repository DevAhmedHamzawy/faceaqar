<?php

namespace App\Http\Controllers;

use App\LawyerContact;
use Illuminate\Http\Request;

class LawyerContactsController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['from' => auth()->user()->id]);
        LawyerContact::create($request->all());
        return 'OK';
    }
}
