<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ShopController;

/*
|--------------------------------------------------------------------------
| Web Routes /
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('tests/test', [ TestController::class, 'index' ]);

Route::get('shops', [ ShopController::class, 'index' ]);

// Route::resouce()リソースコントローラ7個を一度に書く
// Route::resource('contacts', ContactFormController::class);

// 7個のリソースコントローラーを一つ一つ書くとこうなる（イメージ）
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');
// Route::get('contacts', [ ContactFormController::class, 'index' ])->name('contacts.index');

// ただし、グループ化してまとめるとシンプルに書ける
// prefixとすることでContactFormController::classの記述を省略できる
Route::prefix('contacts') // 頭にcontactsをつける
    ->middleware(['auth']) // 認証
    ->controller(ContactFormController::class) // コントローラ指定
    ->name('contacts.')
    ->group(function(){ // グループ化
        Route::get('/', 'index')->name('index'); // 名前付きルート情報
        Route::get('/create', 'create')->name('create'); // 名前付きルート情報
        Route::post('/', 'store')->name('store'); // 名前付きルート情報
        Route::get('/{id}', 'show')->name('show'); // 名前付きルート情報
        Route::get('/{id}/edit', 'edit')->name('edit'); // 名前付きルート情報
        Route::post('/{id}', 'update')->name('update'); // 名前付きルート情報
        Route::post('/{id}/destroy', 'destroy')->name('destroy'); // 名前付きルート情報
    });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
