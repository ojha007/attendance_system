<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::group(['middleware' => 'auth'], function ($router) {
    $router->get('/change/password', 'ChangePasswordController@showChangePasswordForm')
        ->name('show.change.password.form');
});