<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'home']);
Route::get('category/foodbeverage', [ProductController::class, 'foodbeverage']);
Route::get('category/beautyhealth', [ProductController::class, 'beautyhealth']);
Route::get('category/homecare', [ProductController::class, 'homecare']);
Route::get('category/babykid', [ProductController::class, 'babykid']);

Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

Route::get('/sales', [SaleController::class, 'sale'])->name('sales.sale');