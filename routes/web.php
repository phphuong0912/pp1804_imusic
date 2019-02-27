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

Route::get('/', [
        'as'=>'trang-chu',
        'uses'=>'PageController@getIndex'
    ]);

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('exit');

Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function() {
    Route::resource('users', 'UserController');
    Route::resource('musics', 'MusicController');
    Route::resource('artists', 'ArtistController');
    Route::post('search', 'MusicController@search')->name('searchMusic');
});

Route::post('favorite/{music}', 'MusicController@favoriteMusic');
Route::post('unfavorite/{music}', 'MusicController@unFavoriteMusic');

Route::get('my_favorites', 'UserController@myFavorites')->middleware('auth');

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
