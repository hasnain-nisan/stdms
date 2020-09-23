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

Route::get('/', 'student_controller@view')->name('index');

Route::get('/create', 'student_controller@create')->name('create');

Route::get('/edit/{id}', 'student_controller@edit')->name('edit');

Route::post('/store', 'student_controller@store')->name('store');

Route::post('/update/{id}', 'student_controller@update')->name('update');

Route::post('/delete/{id}', 'student_controller@delete')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
