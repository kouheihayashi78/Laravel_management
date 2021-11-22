<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [MessageController::class, 'index'])->name('home');
    Route::get('/create', [MessageController::class, 'create'])->name('create');
    Route::post('/store', [MessageController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [MessageController::class, 'update'])->name('update');
    Route::post('/delete/{id}', [MessageController::class, 'delete'])->name('delete');
});