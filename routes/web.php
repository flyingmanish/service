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
    return view('welcome');
});
Route::post('/store_user' , 'PackController@store');
Route::get('/read_user' , 'PackController@read');
Route::get('/delete_user/{id}' , 'PackController@delete');
Route::get('/edit_user/{id}' , 'PackController@edit');
Route::post('/update_user/{id}' , 'PackController@update');
Route::get('/customerIndex' , 'CustomerController@customerIndex');
Route::post('/store_customer' , 'CustomerController@customerCreate');
Route::get('/getCustomerDetails' , 'CustomerController@getCustomerDetails');
Route::get('/readCustomerDetails' , 'CustomerController@readCustomerDetails');