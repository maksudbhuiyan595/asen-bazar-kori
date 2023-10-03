<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', function () {
    return view('backend.pages.master');
});
   
    Route::get('/',[HomeController::class, 'homepage'])->name('homepage');
    Route::get('/allProducts',[HomeController::class, 'allproducts'])->name('home.allProducts');
    Route::get('/category-wise-products/{id}',[HomeController::class, 'categoryWiseProducts'])->name('category.products');
    Route::get('product-details/{id}',[HomeController::class,'productDetails'])->name('product.details');
    Route::get('/search',[HomeController::class, 'search'])->name('search');

    Route::get('add-to-cart/{cart_id}',[CartController::class, 'addToCart'])->name('add.to.cart');
    Route::get('cart-view',[CartController::class, 'cartView'])->name('cart.view');
    Route::get('cart-item-remove/{id}',[CartController::class, 'cartItemRemove'])->name('cart.item.remove');
    Route::get('cart-clear',[CartController::class, 'cartClear'])->name('cart.clear');

    Route::get('checkout',[CartController::class, 'checkout'])->name('cart.checkout');
    // Route::get('order-place',[CartController::class, 'orderPlace'])->name('order.place');
    

    
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
    