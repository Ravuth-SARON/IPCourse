<?php

use App\Models\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::post('/products', [ProductController::class, 'store']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);






//For User
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/cart/add/{product}', [CartController::class, 'addToCart']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/carts', [CartController::class, 'getCartItems']);
    Route::get('/user', [UserController::class, 'getCurrentUserInfo']);
    Route::post('/cart/{productId}', [CartController::class, 'deleteFromCart']);
    Route::put('/cart/update/{id}',[CartController::class,'updateQuantity']);
   
    Route::post('/orders/create', [OrderController::class, 'createOrder']);
    Route::get('/orders/all', [OrderController::class, 'getAllOrders']);
   

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
