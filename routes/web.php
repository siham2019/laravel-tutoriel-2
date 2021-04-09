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

Route::get('/home', function () {
    return view('welcome');
})->name("welcome");

Route::get('/post/{id}', 'App\Http\Controllers\PostController@get')->name("post");

Route::get('/', function () {
    return view('welcome');
})->name("welcome");
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name("login");

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

Route::get('/posts',"App\Http\Controllers\Postcontroller@index");

Route::post('/posts',"App\Http\Controllers\Postcontroller@create")->name("posts");

Route::post('/posts/{post}/like',"App\Http\Controllers\Likecontroller@like")->name("posts.like");

Route::post('/posts/{post}/dislike',"App\Http\Controllers\Likecontroller@dislike")->name("posts.dislike");

Route::post('/posts/{post}/delete',"App\Http\Controllers\Postcontroller@destroy")->name("posts.delete");




