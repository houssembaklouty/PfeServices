<?php

Route::group(['namespace' => 'Jobeur'], function() {
    // Dashboard
    Route::get('/', 'HomeController@index')->name('jobeur.home');
    Route::get('/profile', 'HomeController@profile')->name('jobeur.profile');

    Route::get('/profile/account-setting', 'HomeController@profileAccountSetting')->name('jobeur.profile.account_setting');
    Route::post('/profile/deactivate-account-setting', 'HomeController@deactivateAccountSetting')->name('jobeur.deactivate.account_setting');
    Route::post('/profile/edit-profile', 'HomeController@editProfile')->name('jobeur.edit.profile');

    Route::get('/notif/markAsRead', function(){
        \Auth::guard('jobeur')->user()->unreadNotifications->markAsRead();
        return back();
    })->name('jobuerNotifMarkAsRead');

    Route::post('/proposition/store', 'HomeController@propositionStore')->name('jobeur.proposition.store');
    Route::post('/proposition/destroy', 'HomeController@propositionDestroy')->name('jobeur.proposition.destroy');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('jobeur.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('jobeur.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('jobeur.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Reset Password
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('jobeur.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('jobeur.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('jobeur.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('jobeur.password.update');

    // Confirm Password
    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('jobeur.password.confirm');
    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('jobeur.verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('jobeur.verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('jobeur.verification.resend');
});
