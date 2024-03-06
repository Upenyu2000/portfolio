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

Route::get('/', function () {
    #return view('welcome');
    return view('welcome');
});

Route::any('/chat', function () {
    return view('chat',['name' =>'Upenyu']);
});

Route::any('/home', function () {
    return view('homepage',['name' =>'Upenyu']);
});

Route::any('/about', function () {
    return view('about',['name' =>'Upenyu']);
});

Route::any('/contact', function () {
    return view('contact',['name' =>'Upenyu']);
});

