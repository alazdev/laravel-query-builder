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

Route::get('/jangan/dibuka', function () {
    return view('welcome');
})->name('index');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/jangan/buku', 'BukuController@view_buku')->name('buku');
Route::get('/jangan/buku/tambah', 'BukuController@tambah_buku')->name('tambah_buku');
Route::get('/jangan/buku/edit', 'BukuController@edit_buku')->name('edit_buku');
Route::post('/jangan/buku/tambahkan', 'BukuController@tambahkan_buku')->name('tambahkan_buku');
Route::post('/jangan/buku/update', 'BukuController@update_buku')->name('update_buku');
Route::post('/jangan/buku/hapus', 'BukuController@hapus_buku')->name('hapus_buku');
