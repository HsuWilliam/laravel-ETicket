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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/','Controller@welcome');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('activity8', 'HomeController@activity8');

Route::post('store','payment@store');

Route::get('/problem',function(){
    return view('problem');
});
Route::get('/clause',function(){
  return view('clause');
});

Route::get('/privacy',function(){
  return view('privacy');
});

Route::get('/news','Controller@news');

Route::get('/order', 'HomeController@personalorder');

Route::get('/allactivity','Controller@allactivity');


Route::get('/aboutus',function(){
  return view('aboutus');
});


