<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::view('', 'admin.dashboard.index')->name('admin.dashboard');

Route::controller(UserController::class)
    ->prefix('admin/user')
    ->name('user.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{user}', 'edit')->name('edit');
        Route::post('update/{user}', 'update')->name('update');
        Route::get('delete/{user}', 'destroy')->name('delete');
    });


    Route::controller(EmployeeController::class)
    ->prefix('admin/employee')
    ->name('employee.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{employee}', 'edit')->name('edit');
        Route::post('update/{employee}', 'update')->name('update');
        Route::get('delete/{employee}', 'destroy')->name('delete');
    });


Route::controller(ProductController::class)
    ->prefix('admin/products')
    ->name('product.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        // Route::get('edit/{user}', 'edit')->name('edit');
        // Route::post('update/{user}', 'update')->name('update');
        // Route::get('delete/{user}', 'destroy')->name('delete');
    });
