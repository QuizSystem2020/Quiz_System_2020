<?php

namespace App\Http\Controllers;
use App\Quiz_Topic;
use App\Suallar;
use App\topics_questions;
use App\selected_users_for_private;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        return view('student_main');
    }

    public function public(){
        $data= Quiz_Topic::select('id','topic','director','test_time')->where('is_public' , 1)->paginate(6);
        return view('public' , [
            'data'=> $data
        ]);
    }

    public function private(){
        $data= selected_users_for_private::select()
        ->where('user_id' , Auth::user()->id)
        ->join('quiztopics' , 'quiztopics.id' , '=' , 'topic_id' )
        ->where('is_public', 0)
        ->paginate(6);
        return view('private' , [
            'data' => $data
        ]);
    }

    public function islenmis(){
        return view('islenmis');
    }

    public function publictest($id){
       
         $data= topics_questions::select()->where('topic_id' , $id)
         ->join('suallars' , 'suallars.sual_id' , '=' , 'topics_questions.sual_id')
         ->join('cavablars', 'cavablars.sual_id' , '=' ,'suallars.sual_id'  )
     
         ->get();

     
         
         print $data;
         return view('publictest' ,[
             'data' =>$data
         ]);
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
