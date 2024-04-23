<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

/// All Product Route
Route::prefix('product')->group(function(){
    Route::get('/view', [ProductController::class, 'productView'])->name('all.product');
    Route::get('/add', [ProductController::class, 'productadd'])->name('add-product');
    Route::post('/store', [ProductController::class, 'productstore'])->name('product-store');
    Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');
    Route::post('/data/update', [ProductController::class, 'ProductDataUpdate'])->name('product-update');
    Route::post('/thambnail/update', [ProductController::class, 'ThambnailImageUpdate'])->name('update-product-thambnail');
    Route::get('/delete/{id}', [ProductController::class, 'productdelete'])->name('product.delete');
    Route::get('/manage', [ProductController::class, 'ManageProduct'])->name('manage-product');

});
Route::get('/product/search',  [ProductController::class, 'search'])->name('products.search');

