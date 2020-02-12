<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student_main');
    }
<<<<<<< HEAD
=======

    public function public(){
        return view('public');
    }

    public function private(){
        return view('private');
    }

    public function islenmis(){
        return view('islenmis');
    }

    public function publictest(){
        return view('publictest');
    }

    public function privatetest(){
        return view('privatetest');
    }

    public function islenmistest(){
        return view('islenmistest');
    }
    public function again(){
        return view('again');
    }
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
}
