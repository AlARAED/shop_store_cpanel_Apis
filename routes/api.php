<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Route::group(['middleware' => ['lcalization']], function () {
//
//});



Route::post('/test','api\v1\UserController@test');

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => 'v1' , 'namespace' => 'api\v1','middleware' =>'lcalization'], function () {
    Route::get('AdsHomeheader','AdsController@index');
    Route::get('adsFooter','AdsController@index');
    Route::get('category','CategoryController@index');
//    Route::get('category/subcategory/id','CategoryController@index');
    Route::get('store/{id}', 'UserController@GetStore');
    Route::get('allstorediscounts', 'UserController@GetStorediscounts');
    Route::get('laststorediscounts', 'UserController@laststorediscounts');

    Route::get('product/{id}', 'ProductCtontroller@getproduct');
    Route::post('checkout', 'OrderController@store');
    Route::get('category/{id}', 'CategoryController@GetStoreByCategory');
    Route::get('last20product', 'ProductCtontroller@Getlast20product');
    Route::get('allproductByStore/{idstore}', 'ProductCtontroller@allproductByStore');
    Route::get('getallgovernorates', 'governorateController@getAll');
    Route::get('getallregion', 'regionsController@getAll');
    Route::get('getallblocks', 'BlocksController@getAll');














});



