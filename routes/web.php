<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
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
    Route::get('/category/add',[CategoryController::class,'index'])->name('category.add');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/manage',[CategoryController::class,'manage'])->name('category.manage');
});
