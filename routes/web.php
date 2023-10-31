<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
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

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'viewDashboard')->middleware('auth')->name('dashboard.page');
    Route::get('/manage/products', 'viewManageProducts')->middleware('auth')->name('manage_products.page');
    Route::get('/login', 'viewLogin')->name('login.page');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.user');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout.user');

Route::post('/manage/products', [ProductsController::class, 'addProduct'])->name('manage_products.add');
