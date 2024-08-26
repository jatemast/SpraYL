<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function redirect()
    {
        $redirectUrl = Socialite::driver('google')
            ->stateless()
            ->redirect()
            ->getTargetUrl();
        return response()->json(['url' => $redirectUrl]);
    }

    public function callback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::updateOrCreate(
                ['google_id' => $googleUser->getId()],
                [
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt(Str::random(16)),
                ]
            );

            Auth::login($user);

            $token = $user->createToken('auth_token')->plainTextToken;

            $redirectUrl = 'http://localhost/web-vanilla/login_oauth2_callback.html';
            $redirectUrl .= '?token=' . $token;
            $redirectUrl .= '&user=' . urlencode(json_encode($user));

            return redirect($redirectUrl);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Authentication failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
