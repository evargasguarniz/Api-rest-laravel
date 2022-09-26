<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if(Auth::attempt($request->only('email','password')))
        {
            return response()->json([
                'token' => $request->user()->createToken($request->name)->plainTextToken,
                'message' => 'Success'
            ]);
        }

        // 401 => no autorizado
        return request()->json([
            'message' => 'Unauthenticated',
        ], 401);
    }

    public function validateLogin($request)
    {
        return $request->validate([
            'email' => 'Required|email',
            'password' => 'Required',
            'name' => 'Required'
        ]);
    }
}
