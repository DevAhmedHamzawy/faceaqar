<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    
    public function index()
    {
        return view('admin.teams.index', ['teams' => DB::table('teams')->join('admins','teams.user_id','=','admins.id')->get(), 'admins' => Admin::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|unique:teams',
        ]);
        DB::table('teams')->insert(['user_id' => $request->user_id]);
    }
}
