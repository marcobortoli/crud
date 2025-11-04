<?php

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

Route::group(['middleware' => 'web'], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::any('/usuarios/search', [App\Http\Controllers\UsersController::class, 'search'])->middleware('auth')->name('usuarios.search');
Route::get('/usuarios', [App\Http\Controllers\UsersController::class, 'index'])->middleware('auth');
Route::get('/usuarios/new', [App\Http\Controllers\UsersController::class, 'new'])->middleware('auth');
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit'])->middleware('auth');
Route::post('/usuarios/add', [App\Http\Controllers\UsersController::class, 'add'])->middleware('auth');
Route::post('/usuarios/{id}/update', [App\Http\Controllers\UsersController::class, 'update'])->middleware('auth');
Route::post('/usuarios/{id}/delete', [App\Http\Controllers\UsersController::class, 'delete'])->middleware('auth');

