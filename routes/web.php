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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile/edit','UserController@edit')->name('profile/edit');

Route::get('analytics/index','AnalyticController@index')->name('analytics/index');
Route::get('companies/index','CompanyController@index')->name('companies/index');
Route::get('companies/offline','CompanyController@offline')->name('companies/offline');
Route::get('companies/online','CompanyController@online')->name('companies/online');
Route::get('finances/index','FinanceController@index')->name('finances/index');

Route::get('bid/index','BidController@index')->name('bid/index');
Route::get('bid/show','BidController@show')->name('bid/show');
Route::get('bid/market','BidController@market')->name('bid/market');
Route::get('bid/market/show','BidController@market_show')->name('bid/market/show');
Route::get('calendar/index','HomeController@calendar')->name('calendar/index');
Route::get('finances/index2','FinanceController@index2')->name('finances/index2');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
