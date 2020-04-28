<?php

Route::group(['middleware' => 'assign.guard:admin,admin/login'],function(){


Route::get('settings/{sort}/1', 'Admin\SettingsController@edit')->name('settings.edit');
Route::patch('settings/update', 'Admin\SettingsController@update')->name('settings.update');

Route::resource('lawyers', 'Admin\LawyerController'); 
Route::resource('clients', 'Admin\ClientController');       
Route::resource('portfolios', 'Admin\PortfolioController');       
Route::resource('teams', 'Admin\TeamController');   

Route::resource('contacts', 'Admin\ContactController');       
Route::resource('tickets', 'Admin\TicketController')->only('index');
Route::get('tickets/{ticket}/{estate}', 'Admin\TicketController@show')->name('tickets.show');
Route::post('tickets/{ticket}/{estate}/activate', 'Admin\TicketController@activate')->name('tickets.activate');
Route::post('tickets/{ticket}/{estate}/deactivate', 'Admin\TicketController@deactivate')->name('tickets.deactivate');

Route::resource('newsletters', 'Admin\NewsletterController');

Route::resource('admins', 'Admin\AdminController');
Route::resource('users', 'Admin\UserController');

Route::get('brokers', 'Admin\BrokerController@index')->name('brokers.index');
Route::get('brokers/{broker}', 'Admin\BrokerController@activate')->name('brokers.activate');
Route::delete('brokers/{broker}', 'Admin\BrokerController@destroy')->name('the-brokers.destroy');

Route::resource('reports', 'Admin\ReportController');

Route::resource('estates', 'Admin\EstateController')->only('index','destroy');
Route::get('estates/adding-premium', 'Admin\EstateController@addingPremiumEstates')->name('estates.addingpremium');

Route::get('offices', 'Admin\OfficeController@index')->name('offices.index');


Route::resource('pages', 'Admin\PageController');
Route::get('pages/{page}/create', 'Admin\PageController@create')->name('pages.create');
Route::post('pages/{page}', 'Admin\PageController@store')->name('pages.store');
Route::get('pages/{page}/{id}', 'Admin\PageController@edit')->name('pages.edit');
Route::post('pages/{page}/{id}', 'Admin\PageController@update')->name('pages.update');

Route::get('icons/{place}', 'Admin\IconController@index')->name('icons');
Route::post('icons/{place}', 'Admin\IconController@store');

Route::resource('links', 'Admin\LinksController');
Route::get('positions/{place}', 'Admin\LinksController@getPositions');

Route::get('dashboard', 'Admin\DashboardController@index');

//Messages Inbox
Route::get('messages', 'Admin\LawyerContactsController@index')->name('inbox');


});