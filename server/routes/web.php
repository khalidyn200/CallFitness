<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TestController::class, 'getGymThreeProducts'])->name('home');
Route::get('/products/gym-accessories', [TestController::class, 'getGymAccessories'])->name('products.gym-accessories');
Route::get('/products/details/{id}', [TestController::class, 'getGymAccessoryDetails']);

Route::get('/products/top-three', [ProductController::class, 'getTopThreeProducts']);

Route::get('/products', [ProductController::class, 'getAllProducts']);

Route::get('/product/{id}', [ProductController::class, 'getProductById']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
