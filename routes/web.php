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
//Quản lý tài khoản
Route::get('/quan-ly-tai-khoan',"user\AccountController@index")->name("user.account");
Route::post('/them-sach-yeu-thich',"user\AccountController@addfavoritebook")->name("user.accountheart");
Route::post('/doi-mat-khau',"user\AccountController@changepass")->name("user.accountpass");
Route::post('/xoa-sach-yeu-thich',"user\AccountController@deletefavoritebook")->name("user.deleteheart");
Route::post('/cap-nhat-thong-tin/{id}',"user\AccountController@updateinfomation")->name("user.updateinfomation");
Route::post('/cua-hang/loc-san-pham/{Id?}',"user\UserController@ShopQuery")->name("user.shopquery");
Route::post('/gui-lien-he',"user\AccountController@mailcontact")->name("user.mailcontact");
//Giỏ hàng
Route::post('/them-gio-hang',"user\AccountController@addcart")->name("account.addcart");
Route::get("/gio-hang","user\UserController@showCart")->name("user.cart");
Route::get('/xoa-gio-hang/{Id?}',"user\AccountController@deletecart")->name("account.cartdelete");
Route::post('/cap-nhat-gio-hang',"user\AccountController@updatecart")->name("account.updatecart");
//Thanh toán
Route::post('/thanh-toan',"user\AccountController@payment")->name("account.payment");
Route::get('/thanh-toan-gio-hang',"user\AccountController@paymentcart")->name("account.paymentcart");
Route::post('/thanh-toan-gio-hang',"user\AccountController@createpaymentcart")->name("account.createpaymentcart");
Route::post('/thanh-toan-nhanh',"user\AccountController@createpaymentquick")->name("account.createpaymentquick");
//Chi tiết đơn hàng
Route::get('/chi-tiet-don-hang/{Id?}',"user\AccountController@orderdetail")->name("account.orderdetail");
Route::get('/huy-don-hang/{Id?}',"user\AccountController@cancelorder")->name("account.cancelorder");
//Đăng nhập đăng ký
Route::post("/dang-nhap","LoginController@login")->name("login");
Route::get("/logout","LoginController@logoutAd")->name("logoutAd");
Route::get("/dang-xuat","LoginController@logoutUser")->name("logoutUser");
Route::get("/dang-nhap","LoginController@index")->name("loginview");
Route::post("/dang-ky","LoginController@register")->name("register");
Route::group(['prefix' => '', 'namespace' => 'user'], function() {
    //Trang chủ
    Route::get("/","UserController@Index")->name("user.index");
    //Cửa hàng
    Route::get("/cua-hang/{Id?}","UserController@Shop")->name("user.shop");
    //Liên hệ
    Route::get("/lien-he","UserController@Contact")->name("user.contact");
    //Chi tiết sản phẩm
    Route::get("/chi-tiet-san-pham/{book_id?}","UserController@Single")->name("user.single");
    Route::get("/ve-chung-toi","UserController@About")->name("user.about");
    //Tin tức
    Route::get("/tin-tuc","UserController@News")->name("user.news");
    //Chi tiết tin tức
    Route::get("/chi-tiet-tin-tuc/{Id?}","UserController@NewsDetail")->name("user.newsdetail");
    //thanh toán
    Route::get("/thanh-toan","UserController@checkout")->name("thanh-toan");
    Route::get("/khuyen-mai","UserController@Promotion")->name("user.promotion");
    //tìm kiếm
    Route::get("/tim-kiem","UserController@bookSearch")->name("tim-kiem");
    //bình luận 
    Route::post('/chi-tiet-san-pham/{id}','UserController@postComment');
});

Route::group(['middleware' => ['checklogin']], function () {
    Route::resource('admin/dashboard',admin\DashboardController::class);
    Route::resource('admin/statistical',admin\StatisticalController::class);
        Route::post('/admin/statistical/result','admin\StatisticalController@result')->name('statistical.result');
    //Quản lý sách
    Route::resource('admin/book',admin\BookController::class);
        Route::post('/admin/book/create','admin\BookController@store')->name('book.store');
        Route::post('/admin/book/addimage','admin\BookController@addimage')->name('book.addimage');
        Route::post('/admin/book/{id}/update','admin\BookController@update')->name('book.update');
        Route::post('/admin/book/editimage','admin\BookController@editimage')->name('book.editimage');
        Route::post('/admin/book','admin\BookController@search')->name('book.search');
        Route::get('/admin/book/{id}/delete','admin\BookController@delete')->name('book.delete');
        Route::get('/admin/book/{id}/deleteimage','admin\BookController@deleteimage')->name('book.deleteimage');
    //Quản lý tài khoản
    Route::resource('admin/account',admin\AccountController::class);
        Route::post('/admin/account/create','admin\AccountController@store')->name('account.store');
        Route::post('/admin/account','admin\AccountController@search')->name('account.search');
        Route::post('/admin/account/{id}/update','admin\AccountController@update')->name('account.update');
        Route::get('/admin/account/{id}/delete','admin\AccountController@delete')->name('account.delete');
    //Quản lý đơn hàng
    Route::resource('admin/order',admin\OrderController::class);
    Route::post('/admin/order/search','admin\OrderController@search')->name('order.search');
    //Quản lý bình luận
    Route::resource('admin/comment',admin\CommentController::class);
    Route::post('/admin/comment/search','admin\CommentController@search')->name('comment.search');
    //Quản lý nhà xuất bản
    Route::resource('admin/publishing',admin\PublishingController::class);
    Route::post('/admin/publishing/search','admin\PublishingController@search')->name('publishing.search');
    //Quản lý khuyến mãi
    Route::resource('admin/promotion',admin\PromotionController::class);
        Route::post('/admin/promotion/create','admin\PromotionController@store')->name('promotion.store');
        Route::post('/admin/promotion/{id}/update','admin\PromotionController@update')->name('promotion.update');
        Route::post('/admin/promotion','admin\PromotionController@search')->name('promotion.search');
        Route::get('/admin/promotion/{id}/delete','admin\PromotionController@delete')->name('promotion.delete');
        Route::post('/admin/promotion/addpromotiondetail','admin\PromotionController@addpromotiondetail')->name('promotion.addpromotiondetail');
        Route::post('/admin/promotion/editpromotiondetail','admin\PromotionController@editpromotiondetail')->name('promotion.editpromotiondetail');
        Route::get('/admin/promotion/{id}/delpromotiondetail','admin\PromotionController@delpromotiondetail')->name('promotion.delpromotiondetail');      
    //Quản lý trang tin tức
        Route::resource('admin/news',admin\NewsController::class);
        Route::post('/admin/news/create','admin\NewsController@store')->name('news.store');
        Route::post('/admin/news/{id}/update','admin\NewsController@update')->name('news.update');
        Route::get('/admin/news/{id}/delete','admin\NewsController@delete')->name('news.delete');
        Route::post('/admin/news','admin\NewsController@search')->name('news.search');
});
