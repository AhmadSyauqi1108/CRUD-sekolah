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

Route::get('/login', 'loginController@index');
Route::get('/dashboard', 'dashboardController@index');
Route::post('/login-cek-login', 'loginController@cekLogin');
Route::get('/data-siswa', 'SiswaController@index');
Route::get('/create-siswa', 'SiswaController@create');
Route::post('/store-siswa', 'SiswaController@store');
Route::get('/data-kelas', 'KelasController@index');
Route::get('/data-kelas/getKelas', 'KelasController@getKelas');
Route::get('/data-jurusan', 'JurusanController@index');