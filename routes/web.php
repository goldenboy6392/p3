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


Route::get('/debugbar', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::info('Current environment: '.App::environment());
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Just demoing some of the features of Debugbar';

});
Route::get('/', 'HomepageController@index')->name('homepage.index');

Route::get('/LoremIpsum', 'LoremIpsumController@index')->name('loremipsum.index');
Route::post('/LoremIpsum', 'LoremIpsumController@index')->name('loremipsum.index');
Route::get('/RandomUser', 'RandomUserController@index')->name('randomuser.index');
Route::post('/RandomUser', 'RandomUserController@index')->name('randomuser.index');