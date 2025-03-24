<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

    // User routes 
    Route::get('/panel/users',[UserController::class,'list']);
    Route::get('/panel/users/add',[UserController::class,'add']);
    Route::post('/panel/users/add',[UserController::class,'store']);
    Route::get('/panel/users/edit/{id}',[UserController::class,'edit']);
    Route::post('/panel/users/edit/{id}',[UserController::class,'update']);
    Route::get('/panel/users/delete/{id}',[UserController::class,'destroy']);

    // Category routes 
    Route::get('/panel/categories',[CategoryController::class,'list']);
    Route::get('/panel/categories/add',[CategoryController::class,'add']);
    Route::post('/panel/categories/add',[CategoryController::class,'store']);
    Route::get('/panel/categories/edit/{id}',[CategoryController::class,'edit']);
    Route::post('/panel/categories/edit/{id}',[CategoryController::class,'update']);
    Route::get('/panel/categories/delete/{id}',[CategoryController::class,'destroy']);

    // Sub Category routes 
    Route::get('/panel/subcategories',[SubcategoryController::class,'list']);
    Route::get('/panel/subcategories/add',[SubcategoryController::class,'add']);
    Route::post('/panel/subcategories/add',[SubcategoryController::class,'store']);
    Route::get('/panel/subcategories/edit/{id}',[SubcategoryController::class,'edit']);
    Route::post('/panel/subcategories/edit/{id}',[SubcategoryController::class,'update']);
    Route::get('/panel/subcategories/delete/{id}',[SubcategoryController::class,'destroy']);

    // Product routes 
    Route::get('/panel/products',[ProductController::class,'list']);
    Route::get('/panel/products/add',[ProductController::class,'add']);
    Route::post('/panel/products/add',[ProductController::class,'store']);
    Route::get('/panel/products/edit/{id}',[ProductController::class,'edit']);
    Route::post('/panel/products/edit/{id}',[ProductController::class,'update']);
    Route::get('/panel/products/delete/{id}',[ProductController::class,'destroy']);
});


