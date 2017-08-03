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
use App\Series;

Route::group(['middleware'=> 'App\Http\Middleware\AdminMiddleware'], function(){
	Route::get('/uploadmessage', function(){
		$series = Series::all();
		return view('uploadmessage',['series'=>$series]);
	});
	Route::post('/addseries', 'HeraldController@addseries');
});

Route::post('/upload', 'HeraldController@messageupload');

Route::get('/series', 'HeraldController@viewseries');

Route::get('/singles', 'HeraldController@viewsingles');

Route::get('/single/message{id}', 'HeraldController@viewsinglemsg');

Route::get('/seriesmessages{id}', 'HeraldController@viewmessages');

//Route::get('/seriesmessages{id}', 'HeraldController@seemessage');

Route::get('/singles{id}', 'HeraldController@allsingles');

Route::post('/comment', 'HeraldController@uploadcomment');
Route::post('/commentsingle', 'HeraldController@uploadsinglecomment');

Auth::routes();

Route::get('/', 'HeraldController@index')->name('home');
