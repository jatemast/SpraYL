<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class AppleController extends Controller
{
    /**
     * Redirige al usuario a Apple para autenticación.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        $redirectUrl = Socialite::driver('apple')->stateless()->redirect()->getTargetUrl();
        return response()->json(['url' => $redirectUrl]);
    }

    /**
     * Maneja la respuesta de Apple después de la autenticación.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback(Request $request)
    {
        try {
            $appleUser = Socialite::driver('apple')->stateless()->user();
            
            $user = User::updateOrCreate(
                ['apple_id' => $appleUser->getId()],
                [
                    'name' => $appleUser->getName(),
                    'email' => $appleUser->getEmail(),
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
