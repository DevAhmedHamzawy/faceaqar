<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function store(Request $request)
    {
        auth()->user()->attachRole($request->role);
        return redirect()->back();
    }
}