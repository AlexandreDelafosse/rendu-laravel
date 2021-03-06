<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CategoryController::class, "index"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('category', CategoryController::class);

/* Route::resource('panier', PanierController::class); */

Route::resource('product', ProductController::class);

Route::resource('post', PostController::class);

Route::middleware(['auth'])->group(function () {
    
    Route::resource('post', PostController::class)
    ->except('index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});