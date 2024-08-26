<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class FacebookController extends Controller
{
     /**
     * Redirige al usuario a Facebook para autenticación.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        $redirectUrl = Socialite::driver('facebook')->stateless()->redirect()->getTargetUrl();
        return response()->json(['url' => $redirectUrl]);
    }

    public function callback(Request $request)
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();

            $user = User::updateOrCreate(
                ['facebook_id' => $facebookUser->getId()],
                [
                    'name' => $facebookUser->getName(),
                    'email' => $facebookUser->getEmail(),
                    'password' => bcrypt(Str::random(16)),
                ]
            );

            Auth::login($user);

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => 'success',
                'message' => 'User authenticated successfully',
                'token' => $token,
                'user' => $user
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Authentication failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
