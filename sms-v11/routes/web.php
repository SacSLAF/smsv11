<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AuthController::class,'login']);
Route::post('/',[AuthController::class,'loginAction']);
Route::get('/logout',[AuthController::class,'logout']);

Route::group(['middleware' => 'useradmin'], function () {
    Route::get('/panel/dashboard',[DashboardController::class,'dashboard']);
    Route::get('/panel/roles',[RoleController::class,'list']);
    Route::get('/panel/roles/add',[RoleController::class,'add']);
    Route::post('/panel/roles/add',[RoleController::class,'store']);
    Route::get('/panel/roles/edit/{id}',[RoleController::class,'edit']);
    Route::post('/panel/roles/edit/{id}',[RoleController::class,'update']);
    Route::get('/panel/roles/delete/{id}',[RoleController::class,'destroy']);
});


