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

Route::get('/teacher', 'TeacherController@index')->middleware('Teachermiddlewar'); // Mellim middleware ismentor == 1
Route::get('/suallar', 'TeacherController@suallar');
Route::post('/suallar/save', 'TeacherController@suallarSave');

Route::get('/quizler', 'TeacherController@quizler');
Route::get('/teacher/quizler/{id}/{is_public}', 'TeacherController@title');
Route::post('/insert_quiz_topic', 'TeacherController@insert_quiz_topic');
Route::post('/insert_quiz_question/{id}', 'TeacherController@insert_quiz_question');
Route::get('/destroy/{topic_id}/{sual_id}', 'TeacherController@destroy');
Route::post('/fin/{id}', 'TeacherController@fin');
Route::get('/destroy2/{sual_id}', 'TeacherController@destroy2');



Route::get('/student', 'StudentController@index')->middleware('Studentmiddleware'); // Sagird middleware ismentor == 0
Route::get('/student', 'StudentController@index')->middleware('Studentmiddleware');//  
Route::get('/public', 'StudentController@public');
Route::get('/private', 'StudentController@private');
Route::get('/islenmis', 'StudentController@islenmis');
Route::get('/publictest/{id}', 'StudentController@publictest');
Route::get('/privatetest/{id}', 'StudentController@privatetest');
Route::get('/islenmistest', 'StudentController@islenmistest');
Route::get('/again', 'StudentController@again');
Route::get('/publictest', 'StudentController@publictest');
<<<<<<< HEAD
Route::post('/cavabla', 'StudentController@Cavabla');
//-*-*-*-*-**-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-**-*-*-**-*-*-*-*-**-* Student part-*-*-*-*-*-*-*-*-**-*-*-*-**-*-*-*-*
//-*-*-*-*-**-*-*-*-*-*-*-**-*-*-*-*-*-*-*-*-*-**-*-*-**-*-*-*-*-**-* Student part-*-*-*-*-*-*-*-*-**-*-*-*-**-*-*-*-*

=======


Route::get('/publictest', 'StudentController@publictest');

Route::get('/publictest', 'StudentController@publictest');
>>>>>>> 76f9fb973ab169c88d8384dc08ac391db9789aae


<<<<<<< HEAD



=======
>>>>>>> 76f9fb973ab169c88d8384dc08ac391db9789aae
