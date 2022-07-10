<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'App\Http\Controllers\StudentController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\StudentController@create')->name('create');
Route::post('/store', 'App\Http\Controllers\StudentController@store')->name('store');
Route::get('/edit/{id}', 'App\Http\Controllers\StudentController@edit')->name('edit');
Route::post('/update/{id}', 'App\Http\Controllers\StudentController@update')->name('update');
Route::post('/delete/{id}', 'App\Http\Controllers\StudentController@delete')->name('delete');
