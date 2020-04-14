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

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/input', function () {
    return view('input');
});

Route::post('/prosesform','formCont@ambilData');

Route::get('/datanilai','dataCont@show');
Route::post('/datanilai/tambah','dataCont@tambah');
Route::get('/datanilai/{id}/edit','dataCont@edit');
Route::post('/datanilai/{id}/update','dataCont@update');
Route::get('/datanilai/{id}/delete','dataCont@delete');
