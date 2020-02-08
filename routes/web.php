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
Route::get('/student', 'StudentController@index');