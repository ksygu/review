<?php

use Illuminate\Support\Facades\Auth;
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


//店舗一覧画面を表示
Route::get('/', 'ShopController@index')->middleware('auth');

//各店舗の詳細画面と口コミ内容を表示
Route::get('/shop/{shop_id}', 'ShopController@detail');

//口コミ投稿フォーム
Route::get('/shop/{shop_id}/review/confirm', 'ShopController@detail');
Route::post('/shop/{shop_id}/review/confirm', 'ShopController@confirm');
Route::post('/shop/{shop_id}/review/complete', 'ShopController@save');

//口コミ削除する
Route::post('/shop/{shop_id}/review/{review_id}', 'ShopController@remove');

//口コミ編集画面を表示
Route::get('/shop/{shop_id}/review/{review_id}/edit', 'ShopController@edit');
Route::post('/shop/{shop_id}/review/{review_id}/edit/complete', 'ShopController@update');

//ユーザー認証
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



