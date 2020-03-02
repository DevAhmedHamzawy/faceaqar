<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        views($user)->record();
        return $user->hasRole('lawyer') ? view('main.lawyers', ['lawyer' => $user, 'views' => views($user)->unique()->count() ]) : abort(404);
    }

}
