<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Importa el modelo User
use Illuminate\Support\Facades\Hash; // Importa el Hash para encriptar la contraseña
use Illuminate\Support\Facades\Auth; // Importa Auth para la autenticación
use Illuminate\Support\Facades\Validator; // Importa Validator para la validación

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Valida los datos de registro
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Crea el usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Crea un token para el usuario
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        // Intenta autenticar al usuario con el email y contraseña proporcionados
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Credenciales inválidas'
            ], 401);
        }

        // Obtiene el usuario autenticado
        $user = User::where('email', $request->email)->firstOrFail();
        // Crea un token para el usuario
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
