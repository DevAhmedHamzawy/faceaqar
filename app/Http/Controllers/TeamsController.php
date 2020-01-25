<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamIds = DB::table('teams')->pluck('user_id');
        return view('main.teams', ['teams' => User::whereIn('id', $teamIds)->get()]);
    }
}
