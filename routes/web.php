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
});
Route::resource('mhs','MhsController');
Route::resource('dosen','DosenController');
Route::resource('matkul', 'MataKuliahController');

Route::get('/matkul/{id}/peserta', 'MataKuliahController@peserta')->name('peserta');