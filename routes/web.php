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

Auth::routes();
Route::get('/applications', function () {
    return view('layouts.master');
});


Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/dashboard', function () {
    return view('layouts.master');
});
Route::get('/IT', function () {
    return view('layouts.master');
});
Route::get('/Management', function () {
    return view('layouts.master');
});
Route::get('/Accounting', function () {
    return view('layouts.master');
});
Route::get('/Design', function () {
    return view('layouts.master');
});
Route::get('/{id}', function () {
    return view('layouts.master');
});
Route::get('/apply', function () {
    return view('layouts.master');
});





Route::get('/home', 'HomeController@index')->name('home');
