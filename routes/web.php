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
//Index to showing all articles
Route::get('Index','ArticleController@Index') -> name('Index');
//show  to display specific article
Route::get('show/{Id}','ArticleController@show');

//Create to display the form of create
Route::get('create', function () {
    return view('create');
}) ->middleware('myAuth');
//Store the values of form creation
Route::post('store','ArticleController@createArticale')-> name('store');

//Display all articles belong the user
Route::get('edit','ArticleController@edit');
//Edit to display the form of Edit
Route::get('editId/{Id}','ArticleController@editId') -> name('editId');
//Update the values of form
Route::post('update/{Id}','ArticleController@update') -> name('update');
//Delete Article
Route::get('deleteArticle/{Id}','ArticleController@deleteArticle');

//Display form of sign in
Route::get('signIn','UserContrller@signIn') -> name('signIn');
//Signing in method
Route::post('signInGo','UserContrller@signInGo') -> name('signInGo');
//Display form of sign up
Route::get('signUp','UserContrller@signUp')-> name('signUp');
//Registration method
Route::post('signUpGo','UserContrller@signUpGo')-> name('signUpGo');
//Sign Out
Route::get('signOut','UserContrller@signOut') -> name('signOut');
