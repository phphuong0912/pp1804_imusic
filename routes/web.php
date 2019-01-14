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

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('exit');

Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function() {
    Route::resource('users','UserController');
});

Route::get('index', [
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
    ]);

Route::get('blog', [
    'as'=>'blog',
    'uses'=>'PageController@getBlog'
    ]);

Route::get('browse', [
    'as'=>'browse',
    'uses'=>'PageController@getBrowse'
    ]);

Route::get('contact', [
    'as'=>'contact',
    'uses'=>'PageController@getContact'
    ]);

Route::get('radio', [
    'as'=>'radio',
    'uses'=>'PageController@getRadio'
    ]);

Route::get('single', [
    'as'=>'single',
    'uses'=>'PageController@getSingle'
    ]);

Route::get('typography', [
    'as'=>'typography',
    'uses'=>'PageController@getTypography'
    ]);
