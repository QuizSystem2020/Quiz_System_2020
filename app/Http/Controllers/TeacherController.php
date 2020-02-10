<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
