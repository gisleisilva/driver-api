<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        if(!Auth::attempt($request->only('email', 'password'))){
            return response()->json([
                'success' => false,
                'message' => 'Not Authorized',
            ], 401);
        }

        $token = Auth::user()->createToken('authToken');

        return response()->json([
            'success' => true,
            'token_code' => $token->plainTextToken,
            'token_type'  => 'Bearer',
            'expires_at'  => (new \DateTime())->modify('+6 hours')->format('Y-m-d H:i:s')
        ]);
    }
}
