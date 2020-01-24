<?php

namespace App\Traits;

use App\SocialAccount;
use App\User;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Contracts\Provider;

class SocialAccountService
{
    public function setOrGetUser(Provider $provider)
    {
        $providerUser = $provider->user();
        $providerName = class_basename($provider);
        $account = SocialAccount::whereProvider($providerName)->whereProviderUserId($providerUser->getId())->first();
        if ($account) {
            return $account->user;
        } else {
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);


            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {

                $randomPassword = rand(10,100);

                $user = User::create([
                    'name' => $providerUser->getName(),
                    'email' => $providerUser->getEmail(),
                    
                    'password' => bcrypt($randomPassword),
                ]);

                event(new Registered($user));


            }


            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }
}