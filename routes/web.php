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

// Route Landing Start
Route::get('/', function () {
    return view('layouts.signin');
});
// Route Landing End

// Route Dashboard Start
Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard')->middleware('role:admin|warehouse|housekeeping|maintenance|mechanic');
// Route Dashboard End

// Route Category Repair Start
Route::get('admin/mechanic/categoryrepair', 'CategoryRepairController@index')->middleware('role:admin|mechanic');
Route::get('admin/mechanic/categoryrepair/create', 'CategoryRepairController@create')->middleware('role:admin|mechanic');
Route::post('admin/mechanic/categoryrepair', 'CategoryRepairController@store')->middleware('role:admin|mechanic');
Route::get('admin/mechanic/categoryrepair/{id}/edit', 'CategoryRepairController@edit')->middleware('role:admin|mechanic');
Route::put('admin/mechanic/categoryrepair/category/{id}', 'CategoryRepairController@update')->middleware('role:admin|mechanic');
Route::delete('admin/mechanic/categoryrepair/{id}', 'CategoryRepairController@destroy')->middleware('role:admin|mechanic');
// Route Category Repair End

// Route Sub Category Repair Start
Route::get('admin/mechanic/subcategoryrepair', 'SubCategoryRepairController@index')->middleware('role:admin|mechanic');
// Route::get('admin/mechanic/categoryrepair/create', 'CategoryRepairController@create')->middleware('role:admin|mechanic');
// Route::post('admin/mechanic/categoryrepair', 'CategoryRepairController@store');
// Route::get('admin/mechanic/categoryrepair/{id}/edit', 'CategoryRepairController@edit');
// Route::put('admin/mechanic/categoryrepair/category/{id}', 'CategoryRepairController@update');
// Route::delete('admin/mechanic/categoryrepair/{id}', 'CategoryRepairController@destroy');
// Route Sub Category Repair End

// Route Category Warehouse Start
Route::get('admin/warehouse/category', 'CategoryController@index');
Route::get('admin/warehouse/category/create', 'CategoryController@create');
Route::post('admin/warehouse/category', 'CategoryController@store');
Route::get('admin/warehouse/category/{id}/edit', 'CategoryController@edit');
Route::put('admin/warehouse/category/{id}', 'CategoryController@update');
Route::delete('admin/warehouse/category/{id}', 'CategoryController@destroy');
// Route Category Warehosue End

// Route Authenticated Start
Auth::routes();
// Route Authenticated End

// Route Home Start
Route::get('home', 'HomeController@index')->name('home');
// Route Home End
