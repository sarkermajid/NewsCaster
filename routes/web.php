<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile','index')->name('profile.index');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/add', 'index')->name('category.add');
        Route::get('/category/store','store')->name('category.store');
        Route::get('/category/manage','manage')->name('category.manage');
        Route::get('/category/status/{id}','status')->name('category.status');
        Route::get('/category/edit/{id}','edit')->name('category.edit');
        Route::post('/category/delete/{id}','delete')->name('category.delete');
    });

});
