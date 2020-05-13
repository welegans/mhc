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
    return view('home');
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('haj', function () {
    return view('haj');
})->name('haj');
Route::get('hajpackage', function () {
    return view('hajpackage');
})->name('hajpackage');
Route::get('hajtnc', function () {
    return view('hajtnc');
})->name('hajtnc');
Route::get('umrah', function () {
    return view('umrah');
})->name('umrah');
Route::get('umrahpackage', function () {
    return view('umrahpackage');
})->name('umrahpackage');
Route::get('umrahtnc', function () {
    return view('umrahtnc');
})->name('umrahtnc');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::post('sendemail', 'SendMailController@send')->name('sendemail');




