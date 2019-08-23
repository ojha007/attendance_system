<?php


Auth::routes();
Route::group(['middleware' => 'auth', 'namespace' => "Admin"], function ($route) {
    $route->get('/profile', 'HomeController@profile')->name('profile');
    $route->get('/verify/teacher', 'AdminController@verifyTeacher')->name('verify.teacher');
    $route->get('/verify/student', 'AdminController@profile')->name('verify.student');
    $route->get('/teacher/all', 'AdminController@ajaxTeacherLists')->name('ajaxTeacherLists');
    $route->get('/student/all', 'AdminController@ajaxStudentLists')->name('ajaxStudentLists');
});
Route::group(['middleware' => 'auth'], function ($router) {
    $router->get('/', function () {
        return view('welcome');
    });
    $router->get('/change/password', 'ChangePasswordController@showChangePasswordForm')
        ->name('show.change.password.form');

});
