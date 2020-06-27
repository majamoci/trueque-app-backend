<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Laravel\Sanctum\;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
    try {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status_code' => 500,
                'message' => 'No autorizado'
            ]);
        }

        $user = User::where('email', $request->email)->first();
        if (!Hash::check($request->password, $user->password, [])) {
            throw new \Exception('Error en el login');
        }

        $tokenResult = $user->createToken('authToken')->plainTextToken;
        return response()->json([
            'status_code' => 200,
            'access_token' => $tokenResult,
            'token_type' => 'Bearer',
        ]);
    } catch (Exception $error) {
        return response()->json([
            'status_code' => 500,
            'message' => 'Error en el Login',
            'error' => $error,
        ]);
    }
    }
}
