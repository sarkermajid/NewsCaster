<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubadminController;
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

//Route::get('/',[HomeController::class,'index'])->name('home');
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/aboutus', 'about')->name('about');
    //    Route::get('/login',[LoginController::class,'login'])->name('login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile.index');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category/add', 'index')->name('category.add');
        Route::post('/category/store', 'store')->name('category.store');
        Route::get('/category/manage', 'manage')->name('category.manage');
        Route::get('/category/status/{id}', 'status')->name('category.status');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::post('/category/delete/{id}', 'delete')->name('category.delete');
    });

    Route::controller(SubadminController::class)->group(function () {
        Route::get('/subadmin/add', 'index')->name('subadmin.add');
        Route::post('/subadmin/store', 'store')->name('subadmin.store');
    });
    Route::controller(AboutController::class)->group(function () {
        Route::get('/about/add', 'index')->name('about.add');
        Route::post('/about/store', 'store')->name('about.store');
        Route::get('/aboutus/manage', 'manage')->name('about.manage');
        Route::get('/aboutus/edit/{id}', 'edit')->name('about.edit');
        Route::post('/aboutus/update/{id}', 'update')->name('about.update');
        Route::post('/aboutus/delete/{id}', 'delete')->name('about.delete');
    });
});
