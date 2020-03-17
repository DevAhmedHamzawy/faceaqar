<?php

namespace App\Http\Controllers;

use App\LawyerContact;
use Illuminate\Http\Request;

class LawyerContactsController extends Controller
{
    public function store(Request $request)
    {
        $request->merge(['from' => auth()->user()->id]);
        LawyerContact::create($request->all());
        return 'OK';
    }
}
