<?php

namespace App\Http\Controllers;
use App\Quiz_Topic;
use App\Suallar;
use App\topics_questions;
use App\selected_users_for_private;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        return view('student_main');
    }

    public function public(){
        $data= Quiz_Topic::select( 'quiztopics.id' , 'topic' , 'name' , 'surname', 'test_time')
        ->where('is_public' , 1)
        ->join('users' , 'users.id' , '=' , 'quiztopics.director')
        ->paginate(6);
        return view('public' , [
            'data'=> $data
        ]);
    }

    public function private(){
    
        $data= selected_users_for_private::select('quiztopics.id' ,'topic' , 'name' , 'surname', 'test_time')
        ->where('user_id' , Auth::user()->id)
        ->join('quiztopics' , 'quiztopics.id' , '=' , 'topic_id' )
        ->join('users' , 'users.id' , '=' , 'quiztopics.director')
        ->where('is_public', 0)
        ->paginate(6);
        
        return view('private' , [
            'data' => $data,
           
        ]);
    }

    public function islenmis(){
        return view('islenmis');
    }

    public function publictest($id){
        
         $data= topics_questions::select(DB::raw('suallars.question , suallars.sual_id , test_time ,group_concat(is_correct) as is_correct , group_concat(cavablars.cavab) as cavab'))
         ->join('suallars' , 'suallars.sual_id' , '=' , 'topics_questions.sual_id')
         ->join('cavablars', 'cavablars.sual_id', '=' ,'suallars.sual_id' )
         ->join('quiztopics' , 'quiztopics.id' , '=' , 'topic_id')
         ->where('topic_id' , $id)
         ->where('is_public' , 1)
         ->groupby('topics_questions.sual_id')
        ->orderby('cavablars.id','desc')
        ->get();
       
        foreach($data as $key => $value)
        {
            $data[$key]->cavab = explode(',', $data[$key]->cavab);
            $data[$key]->is_correct = explode(',' , $data[$key]->is_correct);
        }
        print $data;
        $quiz_topic = Quiz_Topic::select('topic' , 'test_time')->where('id' , $id)->where('is_public',1)->first();
        // dd($quiz_topic);
        $variant = ['A' , 'B' ,'C' , 'D' , 'E'];
         return view('publictest' ,[
             'data' =>$data,
             'quiz_topic' => $quiz_topic->topic,
             'variant' => $variant,
             'test_time' => $quiz_topic->test_time
         ]);
    }

    public function privatetest($id){
        $data= topics_questions::select(DB::raw('suallars.question , group_concat(cavablars.cavab) as cavab'))
        ->join('suallars' , 'suallars.sual_id' , '=' , 'topics_questions.sual_id')
        ->join('cavablars', 'cavablars.sual_id', '=' ,'suallars.sual_id'  )
        ->where('topic_id' , $id)
        ->groupby('topics_questions.sual_id')
        ->orderby('id','desc')
        ->get();
       
       foreach($data as $key => $value)
       {
           $data[$key]->cavab = explode(',', $data[$key]->cavab);
       }
    
       $quiz_topic = Quiz_Topic::select()->where('is_public' ,0)->where('id' , $id)->get();
       $variant = ['A' , 'B' ,'C' , 'D' , 'E'];
       return view('privatetest' ,[
        'data' =>$data,
        'quiz_topic' => $quiz_topic[0]->topic,
        'variant' => $variant,
        'test_time' => $quiz_topic[0]->test_time
    ]);
    }

    public function islenmistest(){
        return view('islenmistest');
    }
    public function again(){
        return view('again');
    }

    public function Cavabla(Request $request)
    {
        dd($request);
    }

}
