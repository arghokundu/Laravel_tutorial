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

// -----------specific view----------
Route::get('/specific/view/{employeeId}',[UserApiController::class,'specificView']);

// ---------------edit specific user details--------------
Route::get('/specific/emp/data/edit/{empId}',[UserApiController::class,'editEmployeeDataFetch']);

// ----------------update data----------------
Route::post('/data/updated/{empId}',[UserApiController::class,'updateEmpData']);
