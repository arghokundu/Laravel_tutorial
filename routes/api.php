<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// -------fetch users data-------
Route::get('/fetch/api/users',[UserApiController::class,'getUserApiFetch']);

Route::post('/store/api/users',[UserApiController::class,'storeUserApiData']);

Route::get('/showAll/api/users',[UserApiController::class,'showAllUsersApi']);