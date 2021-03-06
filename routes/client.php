<?php

Route::group(['namespace' => 'Client'], function() {
    // Dashboard
    Route::get('/', 'HomeController@index')->name('client.home');
    Route::get('/profile', 'HomeController@profile')->name('client.profile');
    Route::get('/profile/account-setting', 'HomeController@profileAccountSetting')->name('client.profile.account_setting');
    Route::get('/jobeur/profile/{id}', 'HomeController@jobeur_profile')->name('client.jobeur_profile');
    Route::get('/jobs', 'HomeController@jobs')->name('client.jobs');
    Route::get('/jobs/edit/{id}', 'HomeController@jobs_edit')->name('client.jobs.edit');
    Route::post('/jobs/update/{id}', 'HomeController@jobs_update')->name('client.jobs.update');
    Route::post('/jobs/destroy/{id}', 'HomeController@jobs_destroy')->name('client.jobs.destroy');

    Route::post('/profile/deactivate-account-setting', 'HomeController@deactivateAccountSetting')->name('client.deactivate.account_setting');
    Route::post('/profile/edit-profile', 'HomeController@editProfile')->name('client.edit.profile');

    Route::get('/notif/markAsRead', function(){
        \Auth::guard('client')->user()->unreadNotifications->markAsRead();
        return back();
    })->name('clientNotifMarkAsRead');

    Route::post('/proposition/change-state', 'HomeController@propositionChangeState')
        ->name('client.proposition.change_state');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('client.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('client.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('client.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Reset Password
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('client.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('client.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('client.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('client.password.update');

    // Confirm Password
    Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('client.password.confirm');
    Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('client.verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('client.verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('client.verification.resend');
});
