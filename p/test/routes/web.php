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



Route::get('/', function () {
    return view('frontend_theme.index');
});

Route::get('error', function () {
    return view('error.403');
})->name('error.403');


Route::post('/login/custom', [
'uses'=>'LoginController@login',
'as'=>'login.custom'
]);

Auth::routes();

Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('login');


  


   
   
   Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
    
   Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
   
   
   Route::get('login/github', 'Auth\LoginController@redirectToProvider');
   Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');









        Route::get('admin/dashboard', 'Admin\\AdminUserController@dashboard')->name('home');
        Route::post('admin/logout', 'LoginController@adminLogout')->name('admin.logout');
       
       
        Route::get('admin/subcategory/{id}', 'Admin\\AdminUserController@getSubcategory');
       
       
    
       //user management
       Route::resource('admin/user', 'Admin\\AdminUserController');
       
       //banner management
       Route::resource('admin/banner', 'banner\\BannerController');
       //configuration
       Route::resource('admin/configuration', 'configuration\\ConfigurationController');
       //category
       Route::resource('admin/category', 'admin\\CategoryController');
       //product
       Route::resource('admin/product', 'admin\\ProductController');
       //coupon
       Route::resource('admin/coupon', 'admin\\CouponController');
       //role management
       Route::resource('admin/role', 'admin\\RoleController');
       //order management
       Route::resource('admin/order', 'admin\\OrderController');
       Route::get('admin/order/search/{key}', 'admin\\OrderController@search');
       //google login
    
       
       //image delete on click
       Route::get('image/delete/{id}', 'admin\\ProductController@imageDelete')->name('image.delete');
       
       //admin contact us
       Route::resource('admin/contact-us', 'admin\\ContactUsController');
       
       //email template
       Route::resource('admin/email-template', 'admin\\EmailController');
       
       //Content Management System template
       Route::resource('admin/cms', 'admin\\CmsController');
       
       //mailchimp
       Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
       Route::post('subscribe',['as'=>'subscribe','uses'=>'MailChimpController@store']);
       
        
       Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'MailChimpController@sendCompaign']);
       
       //pages cms
       Route::get('pages/{slug}', 'admin\\CmsController@pageCreate');
       
       //reports 
       //customer reports
       Route::get('admin/customers', 'admin\\AdminReportController@customersIndex')->name('customers.report');
       Route::get('admin/sales', 'admin\\AdminReportController@salesIndex')->name('sales.report');
       Route::get('admin/sales', 'admin\\AdminReportController@salesIndex')->name('sales.report');
       Route::get('admin/coupons', 'admin\\AdminReportController@couponsIndex')->name('coupons.report');
       Route::get('importExport', 'MaatwebsiteDemoController@importExport');
       Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
       Route::get('customer/{type}/{search?}/{page?}', 'MaatwebsiteDemoController@customer');
       Route::get('customer/{type}/{page?}', 'MaatwebsiteDemoController@customer');
       
       Route::get('sales/{type}/{search?}/{page?}', 'MaatwebsiteDemoController@sales');
       Route::get('sale/{type}/{page?}', 'MaatwebsiteDemoController@sale');
       
       Route::get('coupons/{type}/{search?}/{page?}', 'MaatwebsiteDemoController@coupons');
       Route::get('coupon_search/{type}/{page?}', 'MaatwebsiteDemoController@coupon');
       
       Route::get('orders/{type}/{search?}/{page?}', 'MaatwebsiteDemoController@orders');
       
       Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
           
      