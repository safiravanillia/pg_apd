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
   return view('login');
});

Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'leftsideController@dashboard']);

Route::get('/kategori-personal', ['as' => 'kategori-personal', 'uses' => 'leftsideController@kategoriPersonal']);

Route::get('/kategori-unit', ['as' => 'kategori-unit', 'uses' => 'leftsideController@kategoriUnit']);

Route::get('/apd-personal/{id}', 'leftsideController@pesanPersonal');

Route::get('/apd-unit/{id}', 'leftsideController@pesanUnit');

Route::get('/riwayat','leftsideController@riwayatadmin');

Route::get('/apd/{id}', 'leftsideController@tambahApd');

Route::get('/verif-pinjam', 'leftsideController@verifPinjam');

Route::get('/verif-kembali', 'leftsideController@verifKembali');