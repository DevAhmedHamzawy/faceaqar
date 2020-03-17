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

    // Estate Create Process
    Route::get('estates/{adSort}/create', 'EstateController@create')->name('estate.createestate');
    Route::post('estates/{adSort}/create', 'EstateController@store')->name('estates.create');

    // Estate Update Process
    Route::get('estates/{adSort}/{estate}/edit', 'EstateController@edit')->name('estates.edit');
    Route::patch('estates/{adSort}/{estate}/edit', 'EstateController@update')->name('estates.update');

    //Delete Estate Images
    Route::delete('estate-images/{estate}/{index}', 'EstateImageController@destroy');

    //Delete Estate
    Route::delete('estates/{estate}', 'EstateController@destroy')->name('estates.destroy');

    //Message With Estate Owner
    Route::post('sendmessage', 'MessageController@store');

    //Report Estate
    Route::post('reportestate', 'ReportController@store');

    //Estate Like & Dislike
    Route::post('like', 'LikeController@like');
    Route::post('dislike', 'LikeController@dislike');
    Route::post('check', 'LikeController@check');

    //Brokers
    Route::resource('brokers', 'BrokerController');

    //Create payment ticket For Premium MemberShip
    Route::resource('tickets', 'TicketController', ['only' => ['create']]);

    //Payment Process
    Route::post('payments', 'PaymentController@store')->name('payments.store');
    Route::get('success', 'PaymentController@success')->name('payment.success');
    Route::get('cancel', 'PaymentController@cancel')->name('payment.cancel');

    //store favourite Estate
    Route::resource('favourites', 'FavouriteController', ['only' => ['store']]);

    ///Contact With Lawyer
    Route::post('sendlawyercontact', 'LawyerContactsController@store');

});