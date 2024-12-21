<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientLoginController;
use App\Http\Controllers\AdminLoginController;

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

// HOMEPAGE ROUTE
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// PRODUCTS ROUTE
Route::get('/products', [ProductController::class, 'index'])->name('products');

// CLIENT LOGIN ROUTE
Route::get('/client_login', [ClientLoginController::class, 'index'])->name('client_login');

// ADMIN LOGIN ROUTE
Route::get('admin_login', [AdminLoginController::class, 'index'])->name('admin_login');



