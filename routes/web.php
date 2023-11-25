<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/x', function () {
    return view('welcome');
});

Route::get('registor',[StudentController::class,'registrationForm']);

Route::post('insert',[StudentController::class,'insert_student']);

Route::get('fetch',[StudentController::class,'fetch_student']);

Route::get('delete/{id}',[StudentController::class,'delete_student']);

// only date shown in form

Route::get('update/{id}',[StudentController::class,'edit_student']);


// now we will update data on diff route
Route::post('update-student/{id}',[StudentController::class,'update_student']);


