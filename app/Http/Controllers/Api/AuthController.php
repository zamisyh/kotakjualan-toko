<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request, User $user)
    {

        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return response()->json([
                'status' => false,
                'message' => 'Your credential is wrong, please try again later'
            ], 401);
        }else{
            $user = $user->find(Auth::user()->id);
            return response()->json([
                "status" => true,
                "id" => Auth::user()->id,
                "name" => Auth::user()->name,
                "api_token" => Auth::user()->api_token
            ]);
        }

    }
}
