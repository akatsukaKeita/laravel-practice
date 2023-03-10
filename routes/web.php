<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\App;

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


//ルーティング

Route::get('/', function () {
    return view('welcome');
});
Route::get('/phpinfo', function () {
    return view('phpinfo');
});


// articlesパスにgetメソッドできたリクエストをArticleControllerクラスのindexメソッドで処理する。
 
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); //ArticleControllerクラスのindexアクションメソッドを実行
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');  //記事作成画面を表示する
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store'); //フォームから入力された記事を保存する処理


Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

