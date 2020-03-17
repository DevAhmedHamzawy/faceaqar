<?php

Route::get('settings/{sort}/1', 'Admin\SettingsController@edit')->name('settings.edit');
Route::patch('settings/update', 'Admin\SettingsController@update')->name('settings.update');

Route::resource('lawyers', 'Admin\LawyerController'); 
Route::resource('clients', 'Admin\ClientController');       
Route::resource('portfolios', 'Admin\PortfolioController');       
Route::resource('teams', 'Admin\TeamController');   

Route::resource('contacts', 'Admin\ContactController');       
Route::resource('tickets', 'Admin\TicketController');

Route::resource('newsletters', 'Admin\NewsletterController');

Route::resource('admins', 'Admin\AdminController');
Route::resource('users', 'Admin\UserController');

Route::resource('brokers', 'Admin\BrokerController');
Route::resource('reports', 'Admin\ReportController');

Route::resource('estates', 'Admin\EstateController');

Route::resource('pages', 'Admin\PageController');
Route::get('pages/{page}/create', 'Admin\PageController@create')->name('pages.create');
Route::post('pages/{page}', 'Admin\PageController@store')->name('pages.store');
Route::get('pages/{page}/{id}', 'Admin\PageController@edit')->name('pages.edit');
Route::post('pages/{page}/{id}', 'Admin\PageController@update')->name('pages.update');

Route::get('icons/{place}', 'Admin\IconController@index');
Route::post('icons/{place}', 'Admin\IconController@store');

Route::resource('links', 'Admin\LinksController');
Route::get('positions/{place}', 'Admin\LinksController@getPositions');

Route::get('dashboard', 'Admin\DashboardController@index');