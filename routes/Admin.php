<?php
use App\Http\Controllers\Dashboard\CategoryControllar;
use App\Http\Controllers\Dashboard\ProductsControllar;
use App\Http\Controllers\Dashboard\SettingControllar;
use App\Http\Controllers\Dashboard\UserControllar;
use Illuminate\Support\Facades\Route;




 
Route::group(['prefix' => 'dashboard' , 'as' => 'dashboard.', 'middleware' => ['auth', 'checkLogin']], function () {

    Route::get('/', function () {
        return view('dashboard.layouts.layout');
    })->name('index');

    Route::get('/settings', [SettingControllar::class, 'index'])->name('settings');
    Route::Post('/settings/update/{setting}', [SettingControllar::class, 'update'])->name('settings.update');

    
     Route::get('/products/all', [ProductsControllar::class, 'get'])->name('Products.all');
    Route::Post('/products/delete', [ProductsControllar::class, 'delete'])->name('Products.delete');


    
    Route::get('/category/all', [CategoryControllar::class, 'get'])->name('category.all');
    Route::Post('/category/delete', [CategoryControllar::class, 'delete'])->name('category.delete');




    Route::get('/users/all', [UserControllar::class, 'get'])->name('users.all');
    Route::Post('/users/delete', [UserControllar::class, 'delete'])->name('users.delete');





    Route::resources([
        'users' => UserControllar::class,
        'category' => CategoryControllar::class,
        'Products' => ProductsControllar::class,
     ]);
});