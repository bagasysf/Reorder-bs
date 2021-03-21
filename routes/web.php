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
    return view('admin.dashboard.index');
});

Route::get('admin/category', 'CategoryController@index');
Route::get('admin/category/create', 'CategoryController@create');
Route::post('admin/category', 'CategoryController@store');
Route::get('admin/category/{id}/edit', 'CategoryController@edit');
Route::put('admin/category/{id}', 'CategoryController@update');
Route::delete('admin/category/{id}', 'CategoryController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
