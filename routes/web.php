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
    return view('welcome');
});

//Cấu trúc Route::get('địa chỉ' , 'Controller' @ 'hàm');
//Route::get('/bai-viet', 'ArticleController@view')->name('ArticleView');

Route::resource('/bai-viet', 'ArticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
