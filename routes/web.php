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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
});

*/

Route::get('/','NotaController@index')->name('inicio');
Route::post('/add','NotaController@store')->name('store');
Route::get('/edit/{id}','NotaController@edit')->name('edit');
Route::put('/update/{id}','NotaController@update')->name('update');
Route::delete('/delete/{id}','NotaController@destroy')->name('delete');