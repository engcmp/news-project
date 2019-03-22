<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/news','newsController@index');
Route::get('/news/order/{date_order}/{title_order}','newsController@dataOrder');
Route::get('/news/order/{date_order}','newsController@dateOrder');
Route::get('/news/order/{title_order}','newsController@titleOrder');
Route::get('/news/filter/date/{date}','newsController@filterdata');
Route::get('/news/filter/title/{title}','newsController@filtertitle');






