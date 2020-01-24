<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\SocialAccountService;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToSocial($social)
    {
        return Socialite::with($social)->redirect();
    }

    function handleSocialCallback(SocialAccountService $service, $social)
    {        
        try {
            $user = $service->setOrGetUser(Socialite::driver($social)->stateless());
            auth()->login($user);
            return redirect('/');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
