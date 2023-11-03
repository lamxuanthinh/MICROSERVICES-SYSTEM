<?php

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
Route::get('/trang_chu', 'App\Http\Controllers\HomeController@index')->name('trang_chu');
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('');

Route::post('/tim-kiem','App\Http\Controllers\HomeController@search')->name('search');
