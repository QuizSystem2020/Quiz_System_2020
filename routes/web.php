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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teacher', 'TeacherController@index');
Route::get('/suallar', 'TeacherController@suallar');
Route::get('/quizler', 'TeacherController@quizler');
Route::get('/teacher/quizler/title', 'TeacherController@title');


Route::get('/student', 'StudentController@index');
Route::get('/public', 'StudentController@public');
Route::get('/private', 'StudentController@private');
Route::get('/islenmis', 'StudentController@islenmis');

Route::get('/publictest', 'StudentController@publictest');
Route::get('/privatetest', 'StudentController@privatetest');
Route::get('/islenmistest', 'StudentController@islenmistest');

Route::get('/again', 'StudentController@again');


