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


//Admin Route

Route::get('admin/login', [
    'as' => 'admin-login',
    'uses' => 'AdminController@getLogin']);
Route::post('admin/login', [
    'as' => 'admin-login',
    'uses' => 'AdminController@postLogin']);

Route::group(['prefix' => 'admin', 'middleware'=>'adminLogin'], function () {

    Route::get('logout', [
        'as' => 'admin-logout',
        'uses' => 'AdminController@getLogout']);
    Route::get('dashboard', [
        'as' => 'admin-dashboard',
        'uses' => 'AdminController@getDashboard']);


    Route::group(['prefix' => 'donhang'], function () {

        Route::get('danhsach', [
            'as' => 'admin-dsdonhang',
            'uses' => 'DonHangController@getDanhSach']);

        // Route::get('them', [
        //     'as' => 'admin-themdonhang',
        //     'uses' => 'DonHangController@getThem']);
        // Route::post('them', [
        //     'as' => 'admin-themdonhang',
        //     'uses' => 'DonHangController@postThem']);

        // Route::get('sua/{id}', [
        //     'as' => 'admin-suadonhang',
        //     'uses' => 'DonHangController@getSua']);
        // Route::post('sua/{id}', [
        //     'as' => 'admin-suadonhang',
        //     'uses' => 'DonHangController@postSua']);

        Route::get('xoa/{id}', [
            'as' => 'admin-xoadonhang',
            'uses' => 'DonHangController@getXoa']);
    });


        //Route Suport customer
    Route::group(['frefix' => 'hotro'], function(){
        Route::get('danhsach', [
            'as' => 'admin-dshotro',
            'uses' => 'HoTroController@getHoTro'
        ]);
        Route::get('xoa/{id}',[
            'as'=>'admin-guihotro',
            'uses'=>'HoTroController@getXoa'
        ]);
    });

    Route::group(['prefix' => 'loaisanpham'], function () {

        Route::get('danhsach', [
            'as' => 'admin-dsloaisp',
            'uses' => 'LoaiSPController@getDanhSach']);

        Route::get('them', [
            'as' => 'admin-themloaisp',
            'uses' => 'LoaiSPController@getThem']);
        Route::post('them', [
            'as' => 'admin-themloaisp',
            'uses' => 'LoaiSPController@postThem']);

        Route::get('sua/{id}', [
            'as' => 'admin-sualoaisp',
            'uses' => 'LoaiSPController@getSua']);
        Route::post('sua/{id}', [
            'as' => 'admin-sualoaisp',
            'uses' => 'LoaiSPController@postSua']);

        Route::get('xoa/{id}', [
            'as' => 'admin-xoaloaisp',
            'uses' => 'LoaiSPController@getXoa']);
    });

    Route::group(['prefix' => 'sanpham'], function () {

        Route::get('danhsach', [
            'as' => 'admin-dssp',
            'uses' => 'SPController@getDanhSach']);

        Route::get('them', [
            'as' => 'admin-themsp',
            'uses' => 'SPController@getThem']);
        Route::post('them', [
            'as' => 'admin-themsp',
            'uses' => 'SPController@postThem']);

        Route::get('sua/{id}', [
            'as' => 'admin-suasp',
            'uses' => 'SPController@getSua']);
        Route::post('sua/{id}', [
            'as' => 'admin-suasp',
            'uses' => 'SPController@postSua']);

        Route::get('xoa/{id}', [
            'as' => 'admin-xoasp',
            'uses' => 'SPController@getXoa']);
    });

    Route::group(['prefix' => 'user'], function () {

        Route::get('danhsach', [
            'as' => 'admin-dsuser',
            'uses' => 'UserController@getDanhSach']);

        Route::get('them', [
            'as' => 'admin-themuser',
            'uses' => 'UserController@getThem']);
        Route::post('them', [
            'as' => 'admin-themuser',
            'uses' => 'UserController@postThem']);

        Route::get('sua/{id}', [
            'as' => 'admin-suauser',
            'uses' => 'UserController@getSua']);
        Route::post('sua/{id}', [
            'as' => 'admin-suauser',
            'uses' => 'UserController@postSua']);

        Route::get('xoa/{id}', [
            'as' => 'admin-xoauser',
            'uses' => 'UserController@getXoa']);
    });
});

//Website Route


/*Route::get('/', function () {
    return view('page.404');
});
*/

Route::get('', [
    'as' => 'index',
    'uses' => 'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}', [
    'as' => 'loaisanpham',
    'uses' => 'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}', [
    'as' => 'chitietsanpham',
    'uses' => 'PageController@getChitiet'
]);

Route::get('lien-he', [
    'as' => 'lienhe',
    'uses' => 'PageController@getLienHe'
]);

Route::get('gioi-thieu', [
    'as' => 'gioithieu',
    'uses' => 'PageController@getGioiThieu'
]);

Route::get('add-to-cart/{id}', [
    'as' => 'themgiohang',
    'uses' => 'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}', [
    'as' => 'xoagiohang',
    'uses' => 'PageController@getDelItemCart'
]);

Route::get('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@getCheckout'
]);

Route::post('dat-hang', [
    'as' => 'dathang',
    'uses' => 'PageController@postCheckout'
]);

Route::get('dang-nhap', [
    'as' => 'login',
    'uses' => 'PageController@getLogin'
]);
Route::post('dang-nhap', [
    'as' => 'login',
    'uses' => 'PageController@postLogin'
]);

Route::get('dang-ky', [
    'as' => 'regiser',
    'uses' => 'PageController@getRegiser'
]);

Route::post('dang-ky', [
    'as' => 'regiser',
    'uses' => 'PageController@postRegiser'
]);

Route::get('dang-xuat', [
    'as' => 'logout',
    'uses' => 'PageController@getLogout'
]);

Route::get('search', [
    'as' => 'search',
    'uses' => 'PageController@getSearch'
]);
Route::post('lien-he', [
    'as' => 'lienhe',
    'uses' => 'PageController@postLienHe'
]);