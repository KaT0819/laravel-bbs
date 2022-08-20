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

// 一覧表示
Route::Get('articles', 'ArticleController@index')->name('article.list');
// 記事登録フォーム表示
Route::Get('articles/create', 'ArticleController@create')->name('article.create');
// 記事登録処理
Route::Post('articles', 'ArticleController@store')->name('article.store');
// 記事詳細表示
Route::Get('articles/{id}', 'ArticleController@show')->name('article.show');
// 記事編集フォーム表示
Route::Get('articles/{id}/edit', 'ArticleController@edit')->name('article.edit');
// 記事更新処理
Route::Put('articles/{id}', 'ArticleController@update')->name('article.update');
// 記事削除処理
Route::Delete('articles/{id}', 'ArticleController@destroy')->name('article.destroy');
