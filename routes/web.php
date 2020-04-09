<?php

// Auth Verification Routes
Auth::routes(['verify' => true]);




//Social Login
Route::get('/auth/social/{social}', 'Auth\SocialLoginController@redirectToSocial')->name('social');
Route::get('/auth/{social}/callback', 'Auth\SocialLoginController@handleSocialCallback');




//After User Authenticated & Verified
Route::group(['middleware' => 'verified'], function (){

    // Assign User Role After Verification
    Route::post('home', 'RoleController@store')->name('assign-role');

    // User Home Dashboard
    Route::get('home', 'HomeController@index')->name('home');

    // Update User Profile
    Route::get('profile/{user}/edit', 'UsersController@edit')->name('edit-profile');
    Route::put('profile/{user}/edit', 'UsersController@update')->name('update-profile');

    // Update User Image
    Route::post('profile/image', 'UsersController@image');

    // Estate Create Process
    Route::get('new-estate/{adSort}/create', 'EstateController@create')->name('estate.createestate');
    Route::post('new-estate/{adSort}/create', 'EstateController@store')->name('estates.create');

    // Estate Update Process
    Route::get('the-estate/{adSort}/{estate}/edit', 'EstateController@edit')->name('estates.edit');
    Route::patch('the-estate/{adSort}/{estate}/edit', 'EstateController@update')->name('estates.update');

    //Delete Estate Images
    Route::delete('estate-images/{estate}/{index}', 'EstateImageController@destroy');

    //Delete Estate
    Route::delete('estates/{estate}', 'EstateController@destroy')->name('estates.destroy');

    //Report Estate
    Route::post('reportestate', 'ReportController@store');

    //Estate Like & Dislike
    Route::post('like', 'LikeController@like');
    Route::post('dislike', 'LikeController@dislike');
    Route::post('check', 'LikeController@check');

    //Brokers
    Route::resource('brokers', 'BrokerController');

    //Create payment ticket For Premium MemberShip
    Route::get('create-ticket/{ticket_sort}/{ad_sort}/{name}', 'TicketController@create')->name('create-ticket');

    //Show Ticket
    Route::get('ticket/{id}', 'TicketController@show')->name('show-ticket');

    //Payment Process
    Route::post('payments', 'PaymentController@store')->name('payments.store');
    Route::get('success', 'PaymentController@success')->name('payment.success');
    Route::get('cancel', 'PaymentController@cancel')->name('payment.cancel');

    //store favourite Estate
    Route::resource('favourites', 'FavouriteController', ['only' => ['store']]);

    ///Contact With Lawyer
    Route::post('sendlawyercontact', 'LawyerContactsController@store');

    //Messages Inbox
    Route::get('{user}/messages', 'MessageController@index')->name('inbox');

    //Show Messages
    Route::get('{user}/{from}/{to}/messages', 'MessageController@show')->name('messages.show');

    //Notifications
    Route::get('notifications', 'NotificationController@index')->name('notifications');

    //Read Notification
    Route::post('notifications/read', 'NotificationController@read');

});