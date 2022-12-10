<?php

use Illuminate\Support\Facades\Auth;
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
    return view('main');
});

Auth::routes();

route::get('/login', function (){
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// SUPPLIER
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier');
Route::post('/store-supplier', [App\Http\Controllers\SupplierController::class, 'store']);
Route::put('/supplier/edit/{id}', [App\Http\Controllers\SupplierController::class, 'update']);
Route::delete('/supplier/delete/{id}', [App\Http\Controllers\SupplierController::class, 'destroy']);

// STOCK PRODUCT
Route::get('/stock', [App\Http\Controllers\ProductController::class, 'index'])->name('stock');
Route::post('/store-stock', [App\Http\Controllers\ProductController::class, 'store']);
Route::put('/stock/edit/{id}', [App\Http\Controllers\ProductController::class, 'update']);
Route::delete('/stock/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
