<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    public function show(User $user)
    {
        views($user)->record();
        return $user->hasRole('lawyer') ? view('main.lawyers', ['lawyer' => $user, 'views' => views($user)->unique()->count() ]) : abort(404);
    }
}
