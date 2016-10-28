<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomepageController@index')->name('homepage.index');

Route::get('/LoremIpsum', 'LoremIpsumController@index')->name('loremipsum.index');
Route::post('/LoremIpsum', 'LoremIpsumController@store')->name('loremipsum.store');
Route::get('/RandomUser', 'RandomUserController@index')->name('randomuser.index');
Route::post('/RandomUser', 'RandomUserController@store')->name('randomuser.store');