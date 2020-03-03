<?php

namespace App\Http\Controllers;
use App\Suallar;
use App\Cavablar;
use App\Quiz_Topic;
use App\Http\Requests\SuallarRequest;
use App\Http\Requests\QuizTitleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher_main');
    }
    public function suallar(){
        $datas= Suallar::select('suallars.sual_id','suallars.question','cavablars.sual_id','cavablars.cavab')->leftjoin('cavablars','cavablars.sual_id','=','suallars.sual_id')->get()->toArray();
        // dd($data);
        return view('teacher_suallar',[
            'datas' => $datas
        ]);
    }

    public function suallarSave(SuallarRequest $request){
        $suallars = new Suallar;
        $cavablars= new Cavablar;

        $suallars->question = $request->question;
        $suallars->title = $request->title;
        $suallars->save();

        $id= Suallar::orderBy('sual_id','desc')->get()->first();
        $id=collect($id);
        
        if( $request->option_a != "" ){
          $data = array(
           array('cavab'=>$request->option_a, 'is_correct'=>$request->input('is_correct'), 'sual_id'=>$id['sual_id'])
          );
         }
        if( $request->option_b != "" ){
            $data = array(
                array('cavab'=>$request->option_b, 'is_correct'=>$request->input('is_correct2'), 'sual_id'=>$id['sual_id'])
            );
        }
        if( $request->option_c != "" ){
            $data = array(
                array('cavab'=>$request->option_c, 'is_correct'=>$request->input('is_correct3'), 'sual_id'=>$id['sual_id'])
            );
        }

        if( $request->option_d != "" ){
            $data = array(
                array('cavab'=>$request->option_d, 'is_correct'=>$request->input('is_correct4'), 'sual_id'=>$id['sual_id'])
            );
        }
        if( $request->option_e != "" ){
            $data = array(
                array('cavab'=>$request->option_e, 'is_correct'=>$request->input('is_correct5'), 'sual_id'=>$id['sual_id'])
            );
        }
       // dd($data);
         
          
           
           
            
       

        Cavablar::insert($data);

        return back();
    }


    public function quizler(){
        $print= new Quiz_Topic;
        $print = $print::where('director', Auth::user()->id)->get()->toArray();
     
        return view('teacher_quizler',[
            'print' => $print
        ]);
    }
    public function title(){
        return view('teacher_quizler_title');
    }
    public function insert_quiz_topic(QuizTitleRequest $request){
        
        $topic = new Quiz_Topic;
        $print = new Quiz_Topic;
        $print = $print::where('director', Auth::user()->id)->get()->toArray();
        // dd($print);
        $topic->topic = $request->topic;
        $topic->test_time = $request->input('hours')*60+$request->input('minutes'); 
        $topic->is_public = $request->input('show');
        $topic->director = Auth::user()->id;
        $topic->save();
        $topic = Cache::forget('key');
        // dd($topic);
        return back();
        
        return view('teacher_quizler',[
            'print' => $print
        ]);
    }
}
