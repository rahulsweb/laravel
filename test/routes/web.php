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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', function () {
    return view('frontend_theme.index');
});



Route::post('/login/custom', [
'uses'=>'LoginController@login',
'as'=>'login.custom'
]);

Auth::routes();

 Route::get('admin/dashboard', 'Admin\\AdminUserController@dashboard')->name('home');
 Route::post('admin/logout', 'LoginController@adminLogout')->name('admin.logout');


 Route::get('admin/subcategory/{id}', 'Admin\\AdminUserController@getSubcategory');


Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('login');;

Route::resource('admin/user', 'Admin\\AdminUserController')->middleware('role:admin');


Route::resource('admin/banner', 'banner\\BannerController')->middleware('role:admin');
Route::resource('admin/configuration', 'configuration\\ConfigurationController');

Route::resource('admin/category', 'admin\\CategoryController');
Route::resource('admin/product', 'admin\\ProductController');
Route::resource('admin/coupon', 'Category\\CouponController');
Route::resource('admin/coupon', 'admin\\CouponController');
Route::resource('admin/role', 'admin\\RoleController');


// Route::get('google', function () {

//     return view('googleAuth');

// });

Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
    
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');


Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

//image delete on click
Route::get('image/delete/{id}', 'admin\\ProductController@imageDelete')->name('image.delete');

