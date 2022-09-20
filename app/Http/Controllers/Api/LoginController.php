<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        //   Login User
        if (!Auth::attempt($request->only('email', 'password'))) {
            Helper::sendError('Email Or Password is Worng');
        }
        // Send Response
        return new UserResource(auth()->user());
    }
}
