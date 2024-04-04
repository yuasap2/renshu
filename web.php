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
    return view('welcome')});

/*上までがもともとあったコードです。
Routeの最後のカッコだけいじってしまったので、
もともとの形とは違うかもしれません。
下の文がカリキュラム49（https://snome.jp/framework/laravel-screen-display/）
で書かれてたものです。
上の文を消して下を残すのですか？
それとも違うところにかくものですか？
*/ 


Route::get('/test/func','TestController@func');