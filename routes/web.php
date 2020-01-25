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

    Route::resource('settings', 'SettingsController');
    Route::resource('lawyers', 'Admin\LawyersController');    

});



Auth::routes(['verify' => true]);
Route::get('/auth/social/{social}', 'Auth\SocialLoginController@redirectToSocial')->name('social');
Route::get('/auth/{social}/callback', 'Auth\SocialLoginController@handleSocialCallback');

Route::get('home', 'HomeController@index')->name('home');
Route::get('estates/{adSort}', 'SearchController@searchByAdSort')->name('search-by-ad-sort');
Route::get('estates/{adSort}/index', 'EstateController@index');
Route::get('estates/{adSort}/create', 'EstateController@create');
Route::post('estates/{adSort}/create', 'EstateController@store')->name('estates.create');
Route::get('estates/{adSort}/{estate}', 'EstateController@show');
Route::get('search', 'SearchController@index');
Route::get('search/filters', 'SearchController@getFilters')->name('getresults');


Route::get('profile/{user}', 'UsersController@show')->name('profile');
Route::get('profile/{user}/edit', 'UsersController@edit')->name('edit-profile');
Route::put('profile/{user}/edit', 'UsersController@update')->name('update-profile');

Route::get('lawyers/{user}', 'LawyersController@show');


Route::get('contactus', 'ContactUsController@show');
Route::get('about', 'AboutController@show');
Route::get('terms', 'TermsController@show');

Route::get('clients', 'ClientController@index');
Route::get('portfolios', 'PortfolioController@index');
Route::get('teams', 'TeamsController@index');