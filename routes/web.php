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

Route::get('/',[App\Http\Controllers\BookController::class,'index']);
Route::get('book-list-show',[App\Http\Controllers\BookController::class,'show']);
Route::get('create-book',[App\Http\Controllers\BookController::class,'create']);
Route::post('store-book',[App\Http\Controllers\BookController::class,'store']);

