<?php

/*Home*/
//Home Page
Route::get('/', 'HomeController@welcome');




/*Site Pages*/
//About
Route::get('about', 'AboutController@show')->name('about');

//Terms
Route::get('terms', 'TermsController@show')->name('terms');

//Clients
Route::get('clients', 'ClientController@index')->name('clients');

//Portfolio
Route::get('portfolio', 'PortfolioController@index')->name('portfolio');

//Teams
Route::get('teams', 'TeamsController@index')->name('teams');

//Services
Route::get('services', 'HomeController@services')->name('services');

//Branches
Route::get('branches', 'HomeController@branches')->name('branches');

//Financial Fees
Route::get('financial_fees', 'HomeController@financial_fees')->name('financial_fees');

//Payment Methods
Route::get('payment_methods', 'HomeController@payment_methods')->name('payment_methods');

//Custom Pages
Route::get('pages/{page}', 'PageController@show')->name('pages.show-page');

//ContactUs
Route::get('contactus', 'ContactUsController@show')->name('contactus');
Route::post('sendcontact', 'ContactUsController@store');

//Message With Estate Owner
Route::post('sendmessage', 'MessageController@store');




/*Estates*/
// Estates By AdSort
Route::get('estates', 'SearchController@searchByAdSort')->name('search-by-ad-sort');

// Estates By Adsort
Route::get('estates/{adSort}/index', 'EstateController@index')->name('estates-list');

//Search Filter Estates
Route::get('search/{adSort}', 'SearchController@index')->name('search');
Route::get('search/{adSort}/filters', 'SearchController@getFilters')->name('getresults');

//Estates In Map
Route::get('estates-map/{adSort}', 'EstatesMapController@show')->name('estates-map');

//Estate
Route::get('estates/{adSort}/{estate}', 'EstateController@show')->name('estates.show');




/*Users*/
//User
Route::get('profile/{user}', 'UsersController@show')->name('profile');

//Broker
Route::get('brokers/{broker}', 'BrokerController@show')->name('brokers.show');

//Lawyers
Route::get('lawyers', 'LawyerController@index')->name('all-lawyers');

//Lawyer
Route::get('lawyers/{user}', 'LawyerController@show')->name('lawyers.show');




/*General*/
//Show Areas
Route::get('areas/{area}' , 'AreaController@show')->name('areas.show');

//Thanks Page After Registeration
Route::get('thanks', 'HomeController@thanks');

//NewsLetter
Route::post('savenewsletter', 'NewsLetterController@store');




/*Admin Login & Logout*/ 
// DON'T Put it inside the '/admin' Prefix , Otherwise you'll never get the page due to assign.guard that will redirect you too many times
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');