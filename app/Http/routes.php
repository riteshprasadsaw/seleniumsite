<?php

Route::auth();

//Product Routes
Route::get('/', [
	'uses' => 'ProductController@index',
	'as' => 'index',
	'middleware' => 'auth'
]);

//Route::get('/', 'ProductController@index');
	


// Order Routes
Route::get('/admin', [
	'uses' => 'OrderController@getAllOrders',
	'as' => 'admin',
	'middleware' => 'admin'
]);

Route::post('/pay/{product}', [
	'uses' => 'OrderController@postPayWithStripe',
	'as' => 'pay',
	'middleware' => 'auth'
]);

Route::post('/store', [
	'uses' => 'OrderController@postPayWithStripe',
	'as' => 'store',
	'middleware' => 'auth'
]);

Route::get('/home', 'HomeController@index');

Route::post('stripe/webhook', 'WebhooksController@handle');