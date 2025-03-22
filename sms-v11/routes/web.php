<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class,'login']);
Route::post('/',[AuthController::class,'loginAction']);
Route::get('/logout',[AuthController::class,'logout']);

Route::group(['middleware' => 'useradmin'], function () {
    Route::get('/panel/dashboard',[DashboardController::class,'dashboard']);
    Route::get('/panel/role',[RoleController::class,'list']);
});


