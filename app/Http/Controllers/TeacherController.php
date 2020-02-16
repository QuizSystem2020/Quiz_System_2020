<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz_Topic;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher_main');
    }
    public function suallar(){
        return view('teacher_suallar');
    }
    public function quizler(){
        return view('teacher_quizler');
    }
    public function title(){
        return view('teacher_quizler_title');
    }
    public function insert_quiz_topic(Request $request){

        $topic = new Quiz_Topic;
        $topic->topic = $request->topic;
        $topic->hour = $request->hour;
        $topic->minute = $request->minute;
        $topic->show = $request->show;
        dd($topic);
        // return('$quiz_topic');
        // return view('');
    }
}
