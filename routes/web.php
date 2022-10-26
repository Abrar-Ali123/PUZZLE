<?php
use App\Http\Controllers\Website\IndexControllar;
use App\Http\Controllers\Dashboard\productControllar;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexControllar::class, 'index'])->name('index');
Route::get('/categories/{category}', [WebsiteCategoryControllar::class, 'show'])->name('category');
Route::get('/product/{product}', [productControllar::class, 'show'])->name('product');

Route::resources([
    'users' => UserController::class,
    'category' => CategoryControllar::class,
    'products' => productsControllar::class,
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 


