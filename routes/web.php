<?php

use App\Http\Controllers\Dashboard\SettingControllar;
use App\Http\Controllers\Dashboard\UserController;

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



// website 




// Dashboard
Route::get('/test', [testController::class, 'test'])->name('gg');

 
Route::group(['prefix' => 'dashboard' , 'as' => 'dashboard.', 'middleware' => ['auth', 'checkLogin']], function () {

  
    


    Route::get('/', function () {
        return view('dashboard.layouts.layout');
    })->name('index');

    Route::get('/settings', [SettingControllar::class, 'index'])->name('settings');

    Route::post('/settings/update/{setting}', [SettingController::class, 'update'])->name('settings.update');


    Route::get('/users/all', [UserController::class, 'getUsersDatatable'])->name('users.all');
    Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');

    Route::resources([
        'users' => UserController::class,
     ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('index');
});