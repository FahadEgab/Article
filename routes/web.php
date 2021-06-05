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

Route::get('Index','ArticleController@Index');
Route::get('show/{Id}','ArticleController@show');

Route::get('create', function () {
    return view('create');
});

Route::post('store','ArticleController@createArticale')-> name('store');


Route::get('edit','ArticleController@edit');
Route::get('editId/{Id}','ArticleController@editId') -> name('editId');
Route::post('update/{Id}','ArticleController@update') -> name('update');

Route::get('delete','ArticleController@delete');
Route::get('deleteArticle/{Id}','ArticleController@deleteArticle');

