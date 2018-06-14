<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 10/18/17
 * Time: 10:55 AM
 */
Route::group(['namespace' => 'Admin', 'middleware' => 'web'], function () {
    Route::any('auth/login', 'AuthController@login')->name('admin.login');
    Route::any('auth/logout', 'AuthController@logout')->name('admin.logout');
});
Route::group(['middleware' => 'web'], function () {
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload');
    // list all lfm routes here...
});
Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::any('auth/change-password', 'AuthController@changePassword')->name('admin.changePassword');
    Route::get('/', 'DashboardController@index')->name('admin.home');
    Route::group(['prefix' => 'product'], function () {
        Route::any('add', 'ProductController@add')->name('admin.product.add');
        Route::any('edit/{id}', 'ProductController@edit')->name('admin.product.edit');
        Route::get('list', 'ProductController@index')->name('admin.product.list');
        Route::get('delete/{id}', 'ProductController@delete')->name('admin.product.delete');
        Route::group(['prefix' => '{productId}/package'], function () {
            Route::get('list', 'ProductController@listPackages')->name('admin.product.package.list');
            Route::any('add', 'ProductController@addPackage')->name('admin.product.package.add');
            Route::any('delete/{id}', 'ProductController@deletePackage')->name('admin.product.package.delete');
        });
    Route::group(['prefix' => 'order'], function () {
        Route::get('list', 'OrderController@index')->name('admin.order.list');
        Route::any('edit/{id}', 'OrderController@edit')->name('admin.order.edit');
        Route::any('delete/{id}','OrderController@delete')->name('admin.order.delete');
    });

        Route::group(['prefix' => 'category'], function () {
            Route::get('list', 'ProductCategory@index')->name('admin.product.category.list');
            Route::any('add', 'ProductCategory@add')->name('admin.product.category.add');
            Route::any('edit', 'ProductCategory@edit')->name('admin.product.category.edit');
            Route::any('delete', 'ProductCategory@delete')->name('admin.product.category.delete');
        });

    });
    Route::group(['prefix' => 'post'], function () {
        Route::any('about', 'PostController@aboutUs')->name('admin.post.about');
        Route::any('delivery', 'PostController@delivery')->name('admin.post.delivery');
        Route::any('list', 'PostController@listPost')->name('admin.post.list');
        Route::any('add', 'PostController@add')->name('admin.post.add');
        Route::any('edit', 'PostController@edit')->name('admin.post.edit');
        Route::any('delete', 'PostController@delete')->name('admin.post.delete');
    });
    Route::group(['prefix' => 'package'], function () {
        Route::get('list', 'PackageController@index')->name('admin.package.list');
        Route::any('add', 'PackageController@add')->name('admin.package.add');
        Route::get('delete/{id}', 'PackageController@delete')->name('admin.package.delete');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::any('info', 'SettingsController@information')->name('admin.settings.info');
    });
    Route::group(['prefix'=>'slide'],function (){
        Route::any('upload','SlideController@upanh')->name('admin.slide.upload');
        Route::get('list','SlideController@listslide')->name('admin.list.slide');
    });
});