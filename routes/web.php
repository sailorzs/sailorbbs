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

//主页路由
Route::get('/', 'PagesController@root')
    ->name('root');

//用户身份验证相关路由

//显示用户登录页面
Route::get('login', 'Auth\LoginController@showLoginForm')
    ->name('login');
//用户登录
Route::post('login', 'Auth\LoginController@login');
//用户登出
Route::post('logout', 'Auth\LoginController@logout')
    ->name('logout');

//用户注册相关路由

//显示用户注册页面
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
    ->name('register');
//用户注册
Route::post('register', 'Auth\RegisterController@register');


//密码重置相关路由

//重置密码请求发起页面
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')
    ->name('password.request');
//发送重置密码邮件
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')
    ->name('password.email');
//重置密码页面
Route::get('password/reset/{token}', 'Auth\ForgotPasswordController@showResetForm')
    ->name('password.reset');
//重置密码
Route::post('password/reset', 'Auth\ResetPasswordController@reset')
    ->name('password.update');


//Email 认证相关路由

//
Route::get('email/verify', 'Auth\VerificationController@show')
    ->name('verification.notice');
//
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')
    ->name('verification.verify');
//
Route::get('email/resend', 'Auth\VerificationController@resend')
    ->name('verification.resend');

