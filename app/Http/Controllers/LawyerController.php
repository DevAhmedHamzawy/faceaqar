<?php

namespace App\Http\Controllers;

use App\SeoLinks\SeoLinksShow;
use App\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function index()
    {
        $lawyers = User::withRole('lawyer')->with('profile')->get();

        return view('main.users.lawyers.index', compact('lawyers'));
    }


    public function show(User $user)
    {
        views($user)->record();

        SeoLinksShow::getLinks($user->profile->full_name, $user->profile->description, url()->current(), $user->created_at, $user->roles->first()->display_name, $user->images);

        return $user->hasRole('lawyer') ? view('main.users.lawyers.show', ['lawyer' => $user, 'views' => views($user)->unique()->count() ]) : abort(404);
    }
}
