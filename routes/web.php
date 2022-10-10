<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\HomeController;
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

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
// Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/update', [CategoryController::class, 'update'])->name('categories.update');

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        /*----------------- Product -----------------*/
        Route::get('/products/change-status/{product}', [ProductController::class, 'status'])->name('products.status');
        Route::resource('products', ProductController::class);
        /*----------------- Category -----------------*/
        Route::get('/categories/change-status/{category}', [CategoryController::class, 'status'])->name('categories.status');
        Route::resource('categories', CategoryController::class);
    });
});

Route::name('frontend.')->group(function () {
    /*----------------- Home -----------------*/
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/login', [HomeController::class, 'login'])->name('home.login');
    Route::get('/register', [HomeController::class, 'register'])->name('home.register');
});
