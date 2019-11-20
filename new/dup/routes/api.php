<?php



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Middleware Group use 
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
    });
//Login Api 
Route::post('login', 'API\UserController@login')->name('user.login');
//Register Api
Route::post('register', 'API\UserController@register')->name('user.register');
//Forget Password Api
Route::post('password/email', 'API\ForgotPasswordController@getResetToken')->name('user.forget_password');
//Reset Password Api
Route::post('password/reset', 'API\ResetPasswordController@reset')->name('user.reset_password');