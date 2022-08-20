<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
Route::get('/articles', [ArticleController::class, 'index'])->name('article.list');
// 記事登録フォーム表示
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
// 記事登録処理
Route::post('/articles', [ArticleController::class, 'store'])->name('article.store');
// 記事詳細表示
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');
// 記事編集フォーム表示
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
// 記事更新処理
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('article.update');
// 記事削除処理
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
