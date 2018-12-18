<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::bind('product', function($slug)
{
	return App\Product::where('slug', $slug)->first();

});
Route::bind('category', function($category)
{
	return App\Category::find($category);
});

Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@home'
]);

Route::get('register', [
	'as' => 'register',
	'uses' => 'StoreController@register'
]);


Route::get('product/{slug}',[
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

//carrotp --------

Route::get('cart/show',[
	'as' => 'cart-show',
	'uses' => 'CartController@show'

]);

Route::get('cart/add/{product}',[
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash',[
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}',[
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'

]);


// Authentication routes...
Route::get('auth/login',[
	'as' => 'login-get',
	'uses'=>'Auth\AuthController@getLogin'
]);


Route::post('auth/login', [
	'as' => 'login-post',
	'uses'	=> 'Auth\AuthController@postLogin'
]);


Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registration routes...

Route::get('auth/register', [
	'as'=> 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' =>'Auth\AuthController@postRegister'

]);


//Paylal

Route::get('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',

));

Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',

));

Route::get('admin/home',function(){
	return view('admin.home');
});

Route::resource('admin/category', 'Admin\CategoryController');

