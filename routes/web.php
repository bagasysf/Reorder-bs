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
    return view('layouts.signin');
});

Route::get('admin/warehouse/category', 'CategoryController@index');
Route::get('admin/warehouse/category/create', 'CategoryController@create');
Route::post('admin/warehouse/category', 'CategoryController@store');
Route::get('admin/warehouse/category/{id}/edit', 'CategoryController@edit');
Route::put('admin/warehouse/category/{id}', 'CategoryController@update');
Route::delete('admin/warehouse/category/{id}', 'CategoryController@destroy');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('admin/dashboard', function () {
    return view('admin/dashboard.index');
})->name('dashboard');
Route::middleware('role:admin|warehouse')->get('admin/warehouse/dashboard', function () {
    return view('admin/warehouse/dashboard.index');
})->name('warehouse-dashboard');
Route::get('admin/mechanic/dashboard', function () {
    return view('admin/mechanic/dashboard.index');
})->name('mechanic-dashboard');
