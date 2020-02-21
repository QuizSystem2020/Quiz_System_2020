<?php

namespace App\Http\Controllers;
use App\Quiz_Topic;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student_main');
    }

    public function public(){
        $data= Quiz_Topic::select('id','topic','director','test_time')->where('is_public' , 1)->paginate(5);
        // dd($data);
        return view('public' , [
            'data'=> $data
        ]);
    }

    public function private(){
     
        return view('private');
    }

    public function islenmis(){
        return view('islenmis');
    }

    public function publictest(){
        
        // $query= Quiz_Topic::select('id','topic','director','test_time')->where('is_public' , 1)->find($id);
        // dd($query);
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

}
