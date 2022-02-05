<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesuperAdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\StoreController;
use App\Http\Controllers\admin\AdsController;
use App\Http\Controllers\admin\AdsFooterController;
use App\Http\Controllers\store\StorepanelController;
use App\Http\Controllers\store\SizeController;
use App\Http\Controllers\store\SubCategoryController;
use App\Http\Controllers\store\ProductController;




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
    return redirect('/login');

});

Auth::routes();

Route::group(['prefix' => 'superadmin','middleware'=>['auth','IsSuperAdmin']], function () {
    Route::get('/index',[HomesuperAdminController::class, 'index'])->name('superadmin.dashboard');
    Route::get('/addstore',[StoreController::class, 'index'])->name('superadmin.addstore');
    Route::get('/addstorefooter',[AdsFooterController::class, 'index'])->name('superadmin.addstorefooter');
    Route::post('/addadsfoot',[AdsFooterController::class, 'store'])->name('superadmin.addadsfoot');
    Route::post('/editadsfooter/{id}',[AdsFooterController::class, 'update'])->name('superadmin.editadsfooter');
    Route::post('/deleteadsfooter/{id}',[AdsFooterController::class, 'destroy'])->name('superadmin.deleteadsfooter');



    Route::get('/addcategory',[CategoryController::class, 'index'])->name('superadmin.addcategory');
    Route::post('/addcategory',[CategoryController::class, 'store'])->name('superadmin.addcategory');
    Route::post('/deletecategory/{id}',[CategoryController::class, 'destroy'])->name('superadmin.deletecategory');
    Route::post('/editcategory/{id}',[CategoryController::class, 'update'])->name('superadmin.editcategory');
    Route::post('/createuser',[StoreController::class, 'store'])->name('superadmin.createuser');
    Route::post('/blockstore/{id}',[StoreController::class, 'blockstore'])->name('superadmin.blockstore');
    Route::post('/edituser/{id}',[StoreController::class, 'update'])->name('superadmin.edituser');
    Route::post('/editpassworduser/{id}',[StoreController::class, 'editpassworduser'])->name('superadmin.editpassworduser');
    Route::get('/addads',[AdsController::class, 'index'])->name('superadmin.addads');
    Route::post('/addads',[AdsController::class, 'store'])->name('superadmin.addads');
    Route::post('/editads/{id}',[AdsController::class, 'update'])->name('superadmin.editads');
    Route::post('/deleteads/{id}',[AdsController::class, 'destroy'])->name('superadmin.deleteads');
    Route::get('/settingaccountadmin',[HomesuperAdminController::class, 'setting']);

    Route::post('/accountadmin',[HomesuperAdminController::class, 'update'])->name('superadmin.accountadmin');


    Route::post('/get_reg_by_gov',[StoreController::class, 'get_reg_by_gov'])->name('superadmin.get_reg_by_gov');
    Route::post('/get_block_by_reg',[StoreController::class, 'get_block_by_reg'])->name('superadmin.get_block_by_reg');


//    Route::get('/insertadmin',[HomesuperAdminController::class, 'show'])->name('superadmin.insert');
//    Route::post('/insertadmin',[HomesuperAdminController::class, 'storepanel'])->name('superadmin.insert');

});

Route::group(['prefix' => 'storepanel','middleware'=>'auth'], function () {
    Route::get('/index',[StorepanelController::class, 'index'])->name('storepanel.dashboard');
    Route::get('/addsubcategory',[SubCategoryController::class, 'index'])->name('storepanel.addsubcategory');
    Route::post('/addsubcategory',[SubCategoryController::class, 'store'])->name('superadmin.addsubcategory');
    Route::post('/deletesubcategory/{id}',[SubCategoryController::class, 'destroy'])->name('superadmin.deletesubcategory');
    Route::post('/viewsubcategory/{id}',[SubCategoryController::class, 'viewsubcategory'])->name('superadmin.viewsubcategory');

    Route::post('/editsubcategory/{id}',[SubCategoryController::class, 'update'])->name('superadmin.editsubcategory');
    Route::get('/addsize',[SizeController::class, 'index'])->name('storepanel.addsize');
    Route::post('/addsize',[SizeController::class, 'store'])->name('superadmin.addsize');
    Route::post('/editsize/{id}',[SizeController::class, 'update'])->name('superadmin.editsize');
    Route::post('/deletesize/{id}',[SizeController::class, 'destroy'])->name('superadmin.deletesize');
    Route::get('/addproduct',[ProductController::class, 'index'])->name('storepanel.addproduct');
    Route::post('/addproduct',[ProductController::class, 'store'])->name('storepanel.addproduct');
    Route::get('/allproduct',[ProductController::class, 'allproduct'])->name('storepanel.allproduct');
    Route::post('/editproduct/{id}',[ProductController::class, 'update'])->name('storepanel.editproduct');
    Route::post('/deleteproduct/{id}',[ProductController::class, 'destroy'])->name('superadmin.deleteproduct');

    Route::get('/settingaccountvendor',[HomesuperAdminController::class, 'setting']);
    Route::post('/accountvendore',[HomesuperAdminController::class, 'update'])->name('superadmin.accountadmin');
    Route::post('/discountvalue',[HomesuperAdminController::class, 'update'])->name('storepanel.discountvalue');

    Route::post('/discountvalueproduct/{id}',[ProductController::class, 'discountvalueproduct'])->name('storepanel.discountvalueproduct');





});

Route::get('/sendnotification', function () {

      $user=auth::user();
      $user->notify(new App\Notifications\OrdersNotification);

})->name('sendnotification');




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/readAddress',[ProductController::class, 'readAddress']);

