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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware'=> 'App\Http\Middleware\AdminMiddleware'], function(){
	Route::get('/uploadmessage', function(){
		return view('uploadmessage');
	});
});

Route::post('/upload', 'HeraldController@messageupload');

Route::get('/series', 'HeraldController@viewseries');

Auth::routes();

Route::get('/', 'HeraldController@index')->name('home');
