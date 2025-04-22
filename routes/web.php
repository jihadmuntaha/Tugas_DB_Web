<?php
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\HomepageController::class,'index']);

Route::get('products', [HomepageController::class,'products']);

Route::get('product/{slug}', [HomepageController::class, 'product']);

Route::get('categories',[HomepageController::class, 'categories']);

Route::get('category/{slug}', [HomepageController::class, 'category']);

Route::get('cart', [HomepageController::class, 'cart']);

Route::get('checkout', [HomepageController::class, 'checkout']);

