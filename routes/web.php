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

//REDIRECT --------------------------------------------------------

Route::get('/toptrend', function () {return view('toptrend');});
Route::get('/group', function () {return view('group');});
Route::get('/info', function () {return view('info');});
Route::get('/contact', function () {return view('contact');});
Route::get('/post', function () {return view('post');});
Route::get('/admin', function () {return view('admin');});

Route::get('/home', 'App\Http\Controllers\infoController@home');

//Login & Register

Route::get('/login',['as'=>'login','uses'=>'App\Http\Controllers\LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'App\Http\Controllers\LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'App\Http\Controllers\LoginController@logout']);
Route::get('/register', 'App\Http\Controllers\RegisterController@getRegister');
Route::post('/postregister', 'App\Http\Controllers\RegisterController@postRegister');

//Celeb

Route::post('/post', 'App\Http\Controllers\infoController@upload');
Route::get('/post', 'App\Http\Controllers\infoController@post');
Route::get('/view-post', 'App\Http\Controllers\infoController@viewpost');
Route::get('/edit/{id}', 'App\Http\Controllers\infoController@edit');
Route::post('/edit/update/{id}', 'App\Http\Controllers\infoController@update');
Route::get('/delete/{id}', 'App\Http\Controllers\infoController@delete');
Route::get('/celeb/{pageshow}', 'App\Http\Controllers\infoController@all_post');
Route::get('/celeb/story/{slug}', 'App\Http\Controllers\infoController@getSingle')->where('slug', '[\w\d\-\_]+');

//Group

Route::get('/view-post-gang', 'App\Http\Controllers\infoController@viewpostgang');
Route::get('/post-gang', 'App\Http\Controllers\infoController@postgang');
Route::post('/post-gang', 'App\Http\Controllers\infoController@uploadgang');
Route::get('/edit-gang/{id}', 'App\Http\Controllers\infoController@editgang');
Route::post('/edit-gang/update/{id}', 'App\Http\Controllers\infoController@updategang');
Route::get('/delete-gang/{id}', 'App\Http\Controllers\infoController@deletegang');
Route::get('/gang/{pageshow}', 'App\Http\Controllers\infoController@all_post_gang');
Route::get('/gang/story/{slug}', 'App\Http\Controllers\infoController@getSinglegang')->where('slug', '[\w\d\-\_]+'); 

//News

Route::get('/news', 'App\Http\Controllers\infoController@allnews');
Route::get('/post-news', 'App\Http\Controllers\infoController@news');
Route::post('/post-news', 'App\Http\Controllers\infoController@postnews');
Route::get('/view-news', 'App\Http\Controllers\infoController@viewnews');
Route::get('/edit-news/{id}', 'App\Http\Controllers\infoController@editnews');
Route::post('/edit-news/update-news/{id}', 'App\Http\Controllers\infoController@updatenews');
Route::get('/delete-news/{id}', 'App\Http\Controllers\infoController@deletenews');
Route::get('/news/{pageshow}', 'App\Http\Controllers\infoController@allnews');
Route::get('/news/story/{slug}', 'App\Http\Controllers\infoController@getSinglenews')->where('slug', '[\w\d\-\_]+');
