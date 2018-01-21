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
    return view('auth/login');
});
Route::get('galeri', function () {
    return view('gambar');
});
Route::get('paragraf', function () {
    return view('paragraph');
});
Route::get('custom1', function () {
    return view('custom1');
});
Route::get('custom2', function () {
    return view('custom2');
});
Route::get('tabel','TugasController@tabel');
Auth::routes();

Route::get('/rumah', 'HomeController@index');
