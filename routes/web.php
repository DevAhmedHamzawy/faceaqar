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

Route::get('/', 'HomeController@welcome');

// DON'T Put it inside the '/admin' Prefix , Otherwise you'll never get the page due to assign.guard that will redirect you too many times
Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');
Route::post('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::group(['prefix' => '/admin','middleware' => 'assign.guard:admin,admin/login'],function(){

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

    Route::get('dashboard', 'Admin\DashboardController@index');
});



Auth::routes(['verify' => true]);
Route::get('/auth/social/{social}', 'Auth\SocialLoginController@redirectToSocial')->name('social');
Route::get('/auth/{social}/callback', 'Auth\SocialLoginController@handleSocialCallback');

Route::group(['middleware' => 'verified'], function (){

Route::get('home', 'HomeController@index')->name('home');

Route::post('sendmessage', 'MessageController@store');

Route::post('reportestate', 'ReportController@store');

Route::post('like', 'LikeController@like');
Route::post('dislike', 'LikeController@dislike');
Route::post('check', 'LikeController@check');



Route::get('estates/{adSort}/create', 'EstateController@create')->name('estate.createestate');
Route::post('estates/{adSort}/create', 'EstateController@store')->name('estates.create');


Route::resource('payments', 'PaymentController');
Route::get('success', 'PaymentController@success')->name('payment.success');
Route::get('cancel', 'PaymentController@cancel')->name('payment.cancel');

Route::get('profile/{user}/edit', 'UsersController@edit')->name('edit-profile');
Route::put('profile/{user}/edit', 'UsersController@update')->name('update-profile');

Route::resource('tickets', 'TicketController');

Route::resource('brokers', 'BrokerController');

Route::resource('favourites', 'FavouriteController');

Route::delete('estate-images/{estate}/{index}', 'EstateImageController@destroy');

});


Route::get('thanks', 'HomeController@thanks');

Route::post('sendcontact', 'ContactUsController@store');

Route::post('savenewsletter', 'NewsLetterController@store');

Route::get('profile/{user}', 'UsersController@show')->name('profile');


Route::get('estates/{adSort}', 'SearchController@searchByAdSort')->name('search-by-ad-sort');
Route::get('estates/{adSort}/index', 'EstateController@index');

Route::get('estates/{adSort}/{estate}', 'EstateController@show')->name('estates.show');

Route::get('estates/{adSort}/{estate}/edit', 'EstateController@edit')->name('estates.edit');
Route::patch('estates/{adSort}/{estate}/edit', 'EstateController@update')->name('estates.update');

Route::delete('estates/{estate}', 'EstateController@destroy')->name('estates.destroy');


Route::get('search/{adSort}', 'SearchController@index')->name('search');
Route::get('search/{adSort}/filters', 'SearchController@getFilters')->name('getresults');

Route::resource('areas' , 'AreaController');



Route::get('lawyers/{user}', 'LawyerController@show');
Route::post('sendlawyercontact', 'LawyerContactsController@store');


Route::get('contactus', 'ContactUsController@show')->name('contactus');
Route::get('about', 'AboutController@show')->name('about');
Route::get('terms', 'TermsController@show')->name('terms');

Route::get('clients', 'ClientController@index')->name('clients');
Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('teams', 'TeamsController@index')->name('teams');

Route::get('services', 'HomeController@services')->name('services');
Route::get('branches', 'HomeController@branches')->name('branches');
Route::get('financial_fees', 'HomeController@financial_fees')->name('financial_fees');
Route::get('payment_methods', 'HomeController@payment_methods')->name('payment_methods');

Route::get('estates-map/{adSort}', 'EstatesMapController@show')->name('estates-map');

Route::post('home', 'RoleController@store')->name('assign-role');