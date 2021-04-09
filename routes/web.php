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




Route::get('/','App\Http\Controllers\ProductController@index')->name("welcome");






Route::post('/login', 'App\Http\Controllers\AuthController@login')->name("login");

Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show')->name("product");


Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name("logout");


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");

Route::post('/register','App\Http\Controllers\AuthController@register')->name("register");





