<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('welcome');
});

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