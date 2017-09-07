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

Route::get('/', 'HeraldController@newhome');
Route::get('/newhome', 'HeraldController@newhome');

Route::post('/upload', 'HeraldController@messageupload');

Route::get('/series', 'HeraldController@viewseries');

Route::get('/singles', 'HeraldController@viewsingles');

Route::get('/singlemessages{id}', 'HeraldController@viewsinglemsg');

Route::get('/seriesmessages{id}', 'HeraldController@viewmessages');

//Route::get('/seriesmessages{id}', 'HeraldController@seemessage');

Route::get('/singles{id}', 'HeraldController@allsingles');

Route::post('/comment', 'HeraldController@uploadcomment');

Route::post('/commentsingle', 'HeraldController@uploadsinglecomment');

Route::get('/article', 'HeraldController@articleupload');

Route::post('/articlesupload', 'HeraldController@uploadarticles');

Route::get('/viewarticles', 'HeraldController@allarticles');

Route::get('/viewarticle{id}', 'HeraldController@eacharticle');

Route::get('/delete{id}', 'HeraldController@deletearticle');

Route::post('/articlecomment', 'HeraldController@commentarticle');

//Route::get('/articlecomment', 'HeraldController@showcomment');

Route::get('/news', 'HeraldController@news');

Route::get('/news-single.html', 'HeraldController@viewarticle'); 

Route::get('/uploadpic', 'HeraldController@picupload');

Route::post('/gallery', 'HeraldController@savepic');

Route::get('/gallery', 'HeraldController@showpics');

Route::get('picdelete{id}', 'HeraldController@deletepic');

Route::get('/events', 'HeraldController@showevents'); 

Route::get('/addevent', 'HeraldController@addanevent');

Route::post('/addevents', 'HeraldController@saveanevent');

Route::get('/contact', 'HeraldController@viewcontact');

Auth::routes();

Route::get('/home', 'HeraldController@index')->name('home');
