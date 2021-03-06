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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/data', "SiswaController@index");

Route::get('/data_tambah', "SiswaController@create");
Route::get('/data_hapus/{id}','SiswaController@destroy');
Route::post('/data_kirim', "SiswaController@store");

/*Route::get('/SiswaController', "SiswaController@show");

Route::get('/SiswaController', "SiswaController@show");

Route::resource('data','SiswaController');*/

// Closure

// route::get('profil',function(){
// 	return "ini adalah profil siswa";
// })->name('profil');

// Route name

// Route::get('/tesname', function(){
// 	return route('profil');
// });

// Parameter

// Route::get('/profil/{id}', function($id){
// 	return $id;
// });

// Controller

// Route::get('/tescontroller', "TesController@show");

// Resource
// Route::resource('siswa','resController');
