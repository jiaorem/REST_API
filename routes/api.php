<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::controller(ProductsController::class)->group(function() {
    Route::get('products/categories', 'allCategories');
    Route::get('products', 'allProducts');
    Route::get('products/{product_id}', 'singleProduct');
    Route::post('products/search/{keywords}', 'searchProduct');
    Route::put('products/category/{category_name}', 'categoryProduct');
    Route::delete('products/add', 'addProduct');
    Route::get('roducts/{product_id}', 'updateProduct');
    Route::get('products/{product_id}', 'deleteProduct');
});