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


Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@login')->name('login');
    Route::get('/', 'App\Http\Controllers\Controller@index')->name('login');

});

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@show')->name('show');

    Route::get('/mfaq', 'HomeController@mfaq')->name('mfaq');
    Route::get('/community', 'HomeController@community')->name('community');
    Route::get('/specification', 'HomeController@specification')->name('specification');
    Route::get('/resources', 'HomeController@resources')->name('resources');
    Route::get('/exchanges', 'HomeController@exchanges')->name('exchanges');
    Route::get('/communities', 'HomeController@communities')->name('communities');
    Route::get('/documentation', 'HomeController@documentation')->name('documentation');
    Route::get('/marketcore', 'HomeController@marketcore')->name('marketcore');
    Route::get('/support', 'HomeController@support')->name('support');
    Route::get('/buy', 'HomeController@buy')->name('buy');
    Route::get('/development', 'HomeController@development')->name('development');
    Route::post('/contact','HomeController@contact')->name('contact');
});
Route::post('/message/send', ['uses' => 'FrontController@addFeedback', 'as' => 'front.fb']);

Route::get('', function () {
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    }
    return view('marketclayuot.home');
});

Route::get('language/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});
