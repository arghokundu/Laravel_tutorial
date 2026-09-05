<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\registerController;

Route::get('/', function () {
    return view('layouts.mainApp');
});
// ---------------login---------
Route::get('/login',[loginController::class,'showLoginForm']);
// ---------------reguster-------------
Route::get('/register',[registerController::class,'showRegisterForm']);
// ===============================================================================
//                                  CRUD 
// ===============================================================================
// -------------------show form-----------------
Route::get('/formShow',[CrudController::class,'ShowFormStd']);
// ----------------------store form--------------------
Route::post('/storeData',[CrudController::class,'storeData']);
// -----------------------show all List stident-------------
Route::get('/showAllStudentList',[CrudController::class,'ShowAllStdList']);
// ------------------------Edit form-----------------------
Route::get('/editData/{studentId}',[CrudController::class,'EditData']);
// ------------------------update form----------------------------
Route::post('/updateData/{studentId}',[CrudController::class,'updateData']);
// --------------------------view specific data----------------
Route::get('/specific/data/{studentId}',[CrudController::class,'specificData']);