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
    



Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]); 



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/teacher', 'TeacherController@index')->middleware('Teachermiddlewar');// Mellim middleware ismentor == 1
Route::get('/suallar', 'TeacherController@suallar')->middleware('auth');
Route::post('/suallar/save', 'TeacherController@suallarSave')->middleware('auth');


Route::get('/quizler', 'TeacherController@quizler');
Route::get('/teacher/quizler/{id}/{is_public}', 'TeacherController@title');
Route::post('/insert_quiz_topic', 'TeacherController@insert_quiz_topic');
Route::post('/insert_quiz_question/{id}', 'TeacherController@insert_quiz_question');
Route::get('/destroy/{topic_id}/{sual_id}', 'TeacherController@destroy');
Route::post('/edit', 'TeacherController@edit');
Route::post('/fin/{id}', 'TeacherController@fin');
Route::get('/destroy2/{sual_id}', 'TeacherController@destroy2');

Route::get('/quizler', 'TeacherController@quizler')->middleware('auth');
Route::get('/teacher/quizler/{id}/{is_public}', 'TeacherController@title')->middleware('auth');
Route::post('/insert_quiz_topic', 'TeacherController@insert_quiz_topic')->middleware('auth');
Route::post('/insert_quiz_question/{id}', 'TeacherController@insert_quiz_question')->middleware('auth');
Route::get('/destroy/{topic_id}/{sual_id}', 'TeacherController@destroy')->middleware('auth');
Route::post('/fin/{id}', 'TeacherController@fin')->middleware('auth');
Route::get('/destroy2/{sual_id}', 'TeacherController@destroy2')->middleware('auth');




Route::get('/student', 'StudentController@index')->middleware('Studentmiddleware'); // Sagird middleware ismentor == 0
Route::get('/student', 'StudentController@index')->middleware('Studentmiddleware');//  
Route::get('/public', 'StudentController@public')->middleware('auth');
Route::get('/private', 'StudentController@private')->middleware('auth');
Route::get('/islenmis', 'StudentController@islenmis')->middleware('auth');
Route::get('/publictest/{id}', 'StudentController@publictest')->middleware('auth');
Route::get('/privatetest/{id}', 'StudentController@privatetest')->middleware('auth');
Route::get('/islenmistest', 'StudentController@islenmistest')->middleware('auth');
Route::get('/again', 'StudentController@again')->middleware('auth');
Route::get('/publictest', 'StudentController@publictest')->middleware('auth');
Route::post('/cavabla', 'StudentController@Cavabla')->middleware('auth');


Route::get('/publictest', 'StudentController@publictest')->middleware('auth');
Route::get('/publictest', 'StudentController@publictest')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');


// Route::get('locales/{lang}’, ‘Locale@index');