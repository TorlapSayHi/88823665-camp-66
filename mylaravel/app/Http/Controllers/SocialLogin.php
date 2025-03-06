<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLogin extends Controller
{
    function callback(){
        $google_user = Socialite::driver('google')->user();
        $user = User::where('google_id', $google_user->getId())->first();

        $new_user = User::create([
            'name' => $google_user->getName(),
            'email' => $google_user->getEmail(),
            'google_id' => $google_user->getId(),
        ]);
        Auth::login($new_user);
        return redirect()->intended('/home');
    }

    function redirect(){
        return Socialite::driver('google')->redirect();
    }
}
