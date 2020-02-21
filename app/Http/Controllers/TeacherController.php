<?php

namespace App\Http\Controllers;
use App\Suallar;
use App\Cavablar;
use App\Quiz_Topic;
use App\Http\Requests\SuallarRequest;
use App\Http\Requests\QuizTitleRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher_main');
    }
    public function suallar(){
        return view('teacher_suallar');
    }

    public function suallarSave(SuallarRequest $request){
        $suallars = new Suallar;
        $cavablars= new Cavablar;

        $suallars->question = $request->question;
        $suallars->title = $request->title;
        $suallars->save();

        $id= Suallar::orderBy('sual_id','desc')->get()->first();
        $id=collect($id);
        
        $data = array(
            array('cavab'=>$request->option_a, 'is_correct'=>$request->input('is_correct'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_b, 'is_correct'=>$request->input('is_correct2'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_c, 'is_correct'=>$request->input('is_correct3'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_d, 'is_correct'=>$request->input('is_correct4'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_e, 'is_correct'=>$request->input('is_correct5'), 'sual_id'=>$id['sual_id']),
        );
        Cavablar::insert($data);

        return redirect('/teacher_suallar');
    }


    public function quizler(){
        return view('teacher_quizler');
    }
    public function title(){
        return view('teacher_quizler_title');
    }
    public function insert_quiz_topic(QuizTitleRequest $request){
        
        $topic = new Quiz_Topic;
        $topic->topic = $request->topic;
        $topic->test_time = $request->input('hours')*60+$request->input('minutes'); 
        $topic->is_public = $request->input('show');
        $topic->director = '5';
        $topic->save();
        return redirect('/quizler');
    }
}
