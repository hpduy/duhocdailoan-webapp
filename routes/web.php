<?php

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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/school', function () {
    return view('school');
})->name('school');
Route::get('/scholarship', function () {
    return view('scholarship');
})->name('scholarship');
Route::get('/news', function () {
    return view('news');
})->name('news');
Route::get('/event', function () {
    return view('event');
})->name('event');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

