<?php


Auth::routes();

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/verify/teacher', 'AdminController@profile')->name('verify.teacher');
Route::get('/verify/student', 'AdminController@profile')->name('verify.student');
Route::group(['middleware' => 'auth'], function ($router) {
    $router->get('/', function () {
        return view('welcome');
    });
    $router->get('/change/password', 'ChangePasswordController@showChangePasswordForm')
        ->name('show.change.password.form');

});
