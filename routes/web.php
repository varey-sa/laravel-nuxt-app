<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [AuthController::class, 'login']);

//category
Route::get('/categories', [CategoryController::class, 'index']);

// products
Route::get('/products/category/{id}',[ProductController::class ,'getByCategory']);
Route::get('/products',[ProductController::class ,'index']);
Route::get('/products/{id}',[ProductController::class ,'getOne']);
Route::delete('/products/{id}',[ProductController::class ,'deleteOne']);
