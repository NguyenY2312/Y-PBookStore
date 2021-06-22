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
Route::get('/quan-ly-tai-khoan', function () {
    return view('user/pages/usermanagement');
});
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
        Route::post('/admin/book/{id}/update','admin\BookController@update')->name('book.update');
        Route::get('/admin/book/{id}/delete','admin\BookController@delete')->name('book.delete');
    Route::resource('admin/account',admin\AccountController::class);
    Route::resource('admin/quan-ly-don-hang',admin\OrderController::class);
    Route::resource('admin/quan-ly-binh-luan',admin\CommentController::class);
    Route::resource('admin/quan-ly-nha-xuat-ban',admin\PublishingHouseController::class);
    Route::resource('admin/quan-ly-chi-tiet-hoa-don',admin\BillController::class);
});
