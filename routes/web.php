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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sheldongame/', 'sheldongameController@index');
Route::post('/sheldongame/play', 'sheldongameController@playSheldonGame');

Route::get('/mastermind/', function (){
    return view('mastermind');
  });
Route::post('/mastermind/generate/', 'mastermindController@generateCode');
Route::post('/mastermind/play/', 'mastermindController@playMastermind');
Route::get('/score/', 'puntuationController@index');

