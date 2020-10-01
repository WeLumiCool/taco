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
Route::get('term_of_use','UserController@term')->name('term_of_use');

Auth::routes();
//ADMIN
Route::get('profile/admin','UserController@admin')->name('profile/admin');
Route::post('admin/switch', 'AdminController@switch')->name('admin/switch');
//user
Route::get('/getUsers', 'AdminController@getUsers')->name('getUsers');
Route::get('/getUser/{id}', 'AdminController@getUser')->name('getUser');
Route::post('admin/create/user', 'AdminController@create_user')->name('admin/create/user');
Route::post('/UserStore', 'AdminController@UserStore')->name('UserStore');
//advertiser
Route::get('/getAdvertisers','AdminController@getAdvertisers')->name('getAdvertisers');
Route::get('/getAdvertiserCases/{id}','AdminController@getAdvertiserCases')->name('getAdvertiserCases');
Route::get('/DataForAdvertiser', 'AdminController@DataForAdvertiser')->name('DataForAdvertiser');
Route::get('/TypeChange/{id}', 'AdminController@TypeChange')->name('TypeChange');
Route::post('/CaseStore','AdminController@CaseStore')->name('CaseStore');




Route::post('/EmailCheck','UserController@EmailCheck')->name('EmailCheck');
Route::post('/PhoneCheck','UserController@PhoneCheck')->name('PhoneCheck');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile/edit','UserController@edit')->name('profile/edit');
Route::get('profile/advertiser/profile','UserController@profile')->name('profile/advertiser/profile');

Route::get('analytics/index','AnalyticController@index')->name('analytics/index');
Route::get('companies/index','CompanyController@index')->name('companies/index');
Route::get('companies/offline','CompanyController@offline')->name('companies/offline');
Route::get('companies/online','CompanyController@online')->name('companies/online');
Route::get('finances/index','FinanceController@index')->name('finances/index');
Route::get('companies/radio', 'CompanyController@radio')->name('companies/radio');
Route::get('companies/tv', 'CompanyController@tv')->name('companies/tv');
Route::get('companies/tiktok', 'CompanyController@tiktok')->name('companies/tiktok');
Route::get('companies/vk', 'CompanyController@vk')->name('companies/vk');
Route::get('companies/instagram', 'CompanyController@instagram')->name('companies/instagram');
Route::get('companies/youtube', 'CompanyController@youtube')->name('companies/youtube');
Route::get('companies/online_platforms', 'CompanyController@online_platform')->name('companies/online_platforms');

Route::get('advCompany/{id}','AdvCompanyController@show')->name('advCompany');
//Route::get('companies/radio', 'CompanyController@radio')->name('companies/radio');
//Route::get('companies/radio', 'CompanyController@radio')->name('companies/radio');
//Route::get('companies/radio', 'CompanyController@radio')->name('companies/radio');
Route::get('radio/{id}','CompanyController@radio_show')->name('radio');
Route::post('radio_calc','CaseRadioController@radio_calc')->name('radio_calc');
Route::get('tiktok/{id}','CompanyController@tiktok_show')->name('tiktok');
Route::post('tiktok_calc','CaseTikTokController@tiktok_calc')->name('tiktok_calc');
Route::get('vk/{id}','CompanyController@vk_show')->name('vk');
Route::post('vk_calc','CaseVkontakteController@vk_calc')->name('vk_calc');
Route::get('instagram/{id}','CompanyController@instagram_show')->name('instagram');
Route::post('instagram_calc','CaseInstagramController@instagram_calc')->name('instagram_calc');
Route::get('youtube/{id}','CompanyController@youtube_show')->name('youtube');
Route::post('youtube_calc','CaseYoutubeController@youtube_calc')->name('youtube_calc');
Route::get('online/{id}','CompanyController@online_show')->name('online');
Route::post('online_calc','CaseOnlineController@online_calc')->name('online_calc');
Route::get('tv/{id}','CompanyController@tv_show')->name('tv');
Route::post('tv_calc','CaseTvController@tv_calc')->name('tv_calc');


Route::get('/order/{id}/{type_id}/{case_id}','AdvCompanyController@order')->name('order');
Route::post('/advCompanyStore','AdvCompanyController@store')->name('advCompanyStore');
Route::get('/advActive/{id}', 'AdvCompanyController@advActive')->name('advActive');

Route::get('bid/index','BidController@index')->name('bid/index');
Route::get('bid/show','BidController@show')->name('bid/show');
Route::get('bid/market','BidController@market')->name('bid/market');
Route::get('bid/market/show','BidController@market_show')->name('bid/market/show');
Route::get('calendar/index','HomeController@calendar')->name('calendar/index');
Route::get('finances/index2','FinanceController@index2')->name('finances/index2');






Route::get('moderator/advertiser/create','AdvertiserController@moderatorCreate')->name('moderator/advertiser/create');
Route::post('moderator/advertiser/store','AdvertiserController@moderatorStore')->name('moderator/advertiser/store');
Route::get('moderator/advertiser/cases/{user}','AdvertiserController@moderatorCases')->name('moderator/advertiser/cases');
Route::get('moderator/advertiser/addCase/{id}','AdvertiserController@addCase')->name('moderator/advertiser/addCase');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
