<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    LoginController,
    RegisterController
};
use App\Http\Resources\UserResource;




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new UserResource($request->user());
});
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);
