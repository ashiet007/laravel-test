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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('users/{role}','UserController@index')->name('user.index');
    Route::get('user/{id}','UserController@show')->name('user.show');
    Route::get('user/edit/{id}','UserController@edit')->name('user.edit');
    Route::put('user/edit/{id}','UserController@update')->name('user.update');
    Route::get('user/delete/{id}','UserController@destroy')->name('user.destroy');
});
