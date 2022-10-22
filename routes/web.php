<?php

  use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
  use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::get('/1', function () {
    return view('index');
});

// website 


// Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/categories/{category}', [WebsiteCategoryController::class, 'show'])->name('category');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post');












// Dashboard


Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'checkLogin']], function () {
    

    Route::get('/', function () {
        return view('dashboard.layouts.layout');
    })->name('index');


    Route::get('/settings', [SettingController::class, 'index'])->name('settings');

    Route::post('/settings/update/{setting}', [SettingController::class, 'update'])->name('settings.update');


    Route::get('/users/all', [UserController::class, 'getUsersDatatable'])->name('users.all');
    Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');

 
  
});

 
 