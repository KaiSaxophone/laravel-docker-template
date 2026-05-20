<?php

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

// Route::get('/todo', function () {
//     echo 'Hello World!';
// });

// 画面遷移のルート定義
// 一覧画面の表示
Route::get('/todo', 'TodoController@index')->name('todo.index');

// 新規作成画面の表示
Route::get('/todo/create', 'TodoController@create')->name('todo.create');

// 詳細画面の表示
Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');

// 編集画面の表示
Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');


// DB更新処理
// 新規作成処理
Route::post('/todo', 'TodoController@store')->name('todo.store');

// 更新処理
Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');
