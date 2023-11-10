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

Route::controller(PageController::class)->middleware('auth')->group(function () {
    Route::get('/', 'viewDashboard')->name('dashboard.page');
    Route::get('/manage/products', 'viewManageProducts')->name('manage_products.page');
    Route::get('/manage/accounts', 'viewManageAccounts')->name('manage_accounts.page');
    Route::get('/manage/edit/products', 'viewEditProducts')->name('edit_products.page');
});

Route::get('/login', [PageController::class, 'viewLogin'])->name('login.page');

Route::post('/login', [AuthController::class, 'login'])->name('login.user');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout.user');

Route::post('manage/accounts', [AuthController::class, 'addUser'])->name('manage_accounts.add');

Route::post('/manage/products', [ProductsController::class, 'addProduct'])->name('manage_products.add');
Route::get('/manage/edit/product', [ProductsController::class, 'editProduct'])->name('edit_products.edit');
Route::get('/manage/products/delete', [ProductsController::class, 'deleteProduct'])->name('manage_products.delete');
