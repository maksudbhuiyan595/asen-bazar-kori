<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('backend.pages.master');
});
    /* categroy controller */
    Route::get('category-list',[CategoryController::class, 'index'])->name('category.index');
    Route::get('category-create',[CategoryController::class, 'create'])->name('category.create');
    Route::post('category-store',[CategoryController::class, 'store'])->name('category.store');
    Route::get('category-view/{id}',[CategoryController::class, 'view'])->name('category.view');
    Route::get('category-edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('category-update/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::get('category-delete/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');
    /* product controller */
    Route::get('product-list',[ProductController::class, 'index'])->name('product.index');
    Route::get('product-create',[ProductController::class, 'create'])->name('product.create');
    Route::post('product-store',[ProductController::class, 'store'])->name('product.store');
    Route::get('product-view/{id}',[ProductController::class, 'view'])->name('product.view');
    Route::get('product-edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
    Route::post('product-update/{id}',[ProductController::class, 'update'])->name('product.update');
    Route::get('product-delete/{id}',[ProductController::class, 'destroy'])->name('product.destroy');
    