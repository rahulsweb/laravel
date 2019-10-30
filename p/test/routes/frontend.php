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
Route::get('/', 'frontend\FrontendController@index');


        //routes here

      

        Route::get('login', function () {
            if(auth()->user())
            return redirect('/');
            
            return view('frontend.login.login',['formMode' => 'create']);
        });
        Route::get('email', function () {
            return view('frontend.login.email');
        });
        Route::get('register','frontend\RegisterController@create')->name('frontend.register.create');

        Route::post('/register', 'frontend\RegisterController@store')->name('frontend.register.store');
        Route::post('/login', 'frontend\LoginController@login')->name('frontend.login');
        Route::post('/logout', 'frontend\LoginController@logout')->name('frontend.logout');
      //addresses  
      Route::get('cart/delete/{id}', 'frontend\\CartController@removeProduct')->name('cart.delete');

    Route::resource('cart', 'frontend\\CartController');


    Route::get('cart/add/{id}', 'frontend\CartController@addCart')->name('cart.add');
    Route::get('cart/minus/{id}', 'frontend\CartController@minusCart')->name('cart.minus');
    Route::get('cart/detail/{id}', 'frontend\CartController@cart')->name('cart');   

    Route::get('/shopping/cart/', 'frontend\CartController@shoppingCart')->name('shoppingCart');

    Route::get('/shopping/cart/', 'frontend\CartController@shoppingCart')->name('shoppingCart');

    //web group
    Route::group(['middleware' => ['web'] ], function () {
        Route::resource('address', 'frontend\\AddressController');
    Route::resource('profile', 'frontend\\CartController');
    Route::resource('checkout', 'frontend\\CheckoutController');
    Route::get('checkout/address/{id}', 'frontend\\CheckoutController@getAddress');




//paypal payment
    Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'frontend\\AddMoneyController@payWithPaypal',));
    Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'frontend\\AddMoneyController@postPaymentWithpaypal',));
    Route::get('paypal', array('as' => 'payment.status','uses' => 'frontend\\AddMoneyController@getPaymentStatus',));




//cart 

    Route::get('categories/subcategory/{id}', 'frontend\FrontendController@subcategory')->name('frontend.subcategory');


   
//wishlist 
Route::post('wishlist/add', 'frontend\WishListController@store')->name('wishlist.add');
Route::get('wishlist', 'frontend\WishListController@index')->name('wishlist');
Route::get('wishlist/delete/{id}', 'frontend\WishListController@deleteWish')->name('wishlist.delete');


//order track
Route::get('order/track', 'frontend\OrderController@showTrack');
Route::post('order/track', 'frontend\OrderController@orderTrack')->name('order.track');

// order

Route::get('order', 'frontend\OrderController@index')->name('order');
Route::get('order/{id}', 'frontend\OrderController@show')->name('order.show');

//profile
Route::resource('profile', 'frontend\\ProfileController');
Route::get('password', 'frontend\\ProfileController@showForm')->name('profile.password');

Route::post('/changePassword','frontend\\ProfileController@changePassword')->name('changePassword');
//cash on delivery
Route::post('cod', 'frontend\\AddMoneyController@cod')->name('cod');
//product detail
Route::get('product/detail/{id}', 'frontend\ProductController@show');
//contact us 

Route::get('contact', 'frontend\ProfileController@contact');

Route::post('contact-us', ['as'=>'contactus.store','uses'=>'frontend\ContactUsController@contactSaveData']);



});

//coupon search autocomplete
Route::post('autocomplete', 'frontend\\SearchController@store')->name('autocomplete');

//coupon


Route::get('coupon/remove', 'frontend\\SearchController@remove')->name('coupon.remove');


//github login

Route::post('sub_category/product', 'frontend\FrontendController@getProducts')->name('sub_category.product');