<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all-category', [ApiController::class, 'getAllCategory'])->name('all-category');
Route::get('/latest-product', [ApiController::class, 'getLatestProduct'])->name('latest-product');
Route::get('/product-by-category/{id}', [ApiController::class, 'getProductByCategory'])->name('product-by-category');
Route::get('/product-by-id/{id}', [ApiController::class, 'getProductById'])->name('product-by-id');

Route::post('/new-order', [ApiController::class, 'newOrder'])->name('new-order');
Route::post('/customer-logout', [ApiController::class, 'logout'])->name('customer-logout');
