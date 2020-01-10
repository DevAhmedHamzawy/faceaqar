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
    return view('main.welcome');
});

// DON'T Put it inside the '/admin' Prefix , Otherwise you'll never get the page due to assign.guard that will redirect you too many times
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::group(['prefix' => '/admin','middleware' => 'assign.guard:admin,admin/login'],function(){


});



Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('estates/{adSort}', 'SearchController@searchByAdSort');
Route::get('estates/{adSort}/index', 'EstateController@index');
Route::get('estates/{adSort}/create', 'EstateController@create');
Route::post('estates/{adSort}/create', 'EstateController@store')->name('estates.create');
Route::get('estates/{adSort}/{estate}', 'EstateController@show');
Route::get('search', 'SearchController@index');
Route::get('search/filters', 'SearchController@getFilters');
