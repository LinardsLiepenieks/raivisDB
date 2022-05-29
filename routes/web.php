<?php

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

Route::get('/', function () {
    return view('welcome')->with('products', \App\Models\Product::all());
});

Route::post('addProduct', [\App\Http\Controllers\ProductsController::class, 'store']);
Route::get('products/{id}/delete', [\App\Http\Controllers\ProductsController::class, 'delete']);
Route::get('products/{id}/update', [\App\Http\Controllers\ProductsController::class, 'update']);
