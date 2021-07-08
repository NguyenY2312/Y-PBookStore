<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('/quan-ly-tai-khoan',user\AccountController::class);
Route::post("/dang-nhap","LoginController@login")->name("login");
Route::get("/logout","LoginController@logoutAd")->name("logoutAd");
Route::get("/dang-xuat","LoginController@logoutUser")->name("logoutUser");
Route::get("/dang-nhap","LoginController@index")->name("loginview");
Route::post("/dang-ky","LoginController@register")->name("register");

Route::group(['prefix' => '', 'namespace' => 'user'], function() {
    Route::get("/","UserController@Index")->name("user.index");
    Route::get("shop","UserController@Shop")->name("user.shop");
    Route::get("contact","UserController@Contact")->name("user.contact");
    Route::get("single","UserController@Single")->name("user.single");
    Route::get("about","UserController@About")->name("user.about");
    Route::get("cart","UserController@Cart")->name("user.cart");

});

Route::group(['middleware' => ['checklogin']], function () {
    Route::resource('admin/dashboard',admin\DashboardController::class);
    Route::resource('admin/book',admin\BookController::class);
        Route::post('/admin/book/create','admin\BookController@store')->name('book.store');
        Route::post('/admin/book/addimage','admin\BookController@addimage')->name('book.addimage');
        Route::post('/admin/book/{id}/update','admin\BookController@update')->name('book.update');
        Route::post('/admin/book/editimage','admin\BookController@editimage')->name('book.editimage');
        Route::post('/admin/book','admin\BookController@search')->name('book.search');
        Route::get('/admin/book/{id}/delete','admin\BookController@delete')->name('book.delete');
        Route::get('/admin/book/{id}/deleteimage','admin\BookController@deleteimage')->name('book.deleteimage');
    Route::resource('admin/account',admin\AccountController::class);
        Route::post('/admin/account/create','admin\AccountController@store')->name('account.store');
        Route::post('/admin/account/{id}/update','admin\AccountController@update')->name('account.update');
        Route::post('/admin/account','admin\AccountController@search')->name('account.search');
        Route::get('/admin/account/{id}/delete','admin\AccountController@delete')->name('account.delete');
    Route::resource('admin/quan-ly-don-hang',admin\OrderController::class);
        Route::post('/admin/quan-ly-don-hang','admin\OrderController@search')->name('order.search');
    Route::resource('admin/quan-ly-binh-luan',admin\CommentController::class);
        Route::post('/admin/quan-ly-binh-luan','admin\CommentController@search')->name('comment.search');
    Route::resource('admin/quan-ly-nha-xuat-ban',admin\PublishingHouseController::class);
        Route::post('/admin/quan-ly-nha-xuat-ban','admin\PublishingHouseController@search')->name('publish.search'); 
    Route::resource('admin/quan-ly-chi-tiet-hoa-don',admin\BillController::class);
    Route::resource('admin/promotion',admin\PromotionController::class);
        Route::post('/admin/promotion/create','admin\PromotionController@store')->name('promotion.store');
        Route::post('/admin/promotion/{id}/update','admin\PromotionController@update')->name('promotion.update');
        Route::post('/admin/promotion','admin\PromotionController@search')->name('promotion.search');
        Route::get('/admin/promotion/{id}/delete','admin\PromotionController@delete')->name('promotion.delete');
        Route::post('/admin/promotion/addpromotiondetail','admin\PromotionController@addpromotiondetail')->name('promotion.addpromotiondetail');
        Route::post('/admin/promotion/editpromotiondetail','admin\PromotionController@editpromotiondetail')->name('promotion.editpromotiondetail');
        Route::get('/admin/promotion/{id}/delpromotiondetail','admin\PromotionController@delpromotiondetail')->name('promotion.delpromotiondetail');      
});
