<?php

namespace App\Http\Controllers;
use App\Suallar;
use App\Cavablar;
use App\Quiz_Topic;
use App\TopicsQuestions;
use App\Fin;
use App\Users;
use App\Http\Requests\SuallarRequest;
use App\Http\Requests\QuizTitleRequest;
use App\Http\Requests\TopicsQuestionsRequest;
use Illuminate\Http\Request;
use App\Http\Requests\FinRequest;
use Auth;
use Cache;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher_main');
    }
    public function suallar(){
        $suallars = new Suallar;
        $cavablars= new Cavablar;
        $join = $cavablars::leftJoin('suallars', 'suallars.sual_id', '=', 'cavablars.sual_id')->where('suallars.director', Auth::user()->id)->get()->groupBy('sual_id')->toArray();
        // dd($join);
        return view('teacher_suallar',[
            'join' => $join
        ]);
    }

    public function suallarSave(SuallarRequest $request){
        $suallars = new Suallar;
        $cavablars= new Cavablar;

        $suallars->question = $request->question;
        $suallars->director = Auth::user()->id;
        $suallars->title = $request->title;
        $suallars->save();

        $id= Suallar::orderBy('sual_id','desc')->get()->first();
        $id=collect($id);

        $data = array(
            array('cavab'=>$request->option_a, 'is_correct'=>$request->input('is_correct'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_b, 'is_correct'=>$request->input('is_correct2'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_c, 'is_correct'=>$request->input('is_correct3'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_d, 'is_correct'=>$request->input('is_correct4'), 'sual_id'=>$id['sual_id']),
            array('cavab'=>$request->option_e, 'is_correct'=>$request->input('is_correct5'), 'sual_id'=>$id['sual_id'])
        );
        // $required = array(
        //     array('cavab'=>$request->option_a, 'is_correct'=>$request->input('is_correct'), 'sual_id'=>$id['sual_id']),
        //     array('cavab'=>$request->option_b, 'is_correct'=>$request->input('is_correct2'), 'sual_id'=>$id['sual_id']),
        // );
        // if($request->option_c){
        //     $data = array('cavab'=>$request->option_c, 'is_correct'=>$request->input('is_correct3'), 'sual_id'=>$id['sual_id']);
        //     $required = $required->merge($data);
        // }
        // if($request->option_d){
        //     $data = array('cavab'=>$request->option_d, 'is_correct'=>$request->input('is_correct4'), 'sual_id'=>$id['sual_id']);
        //     $required = $required->merge($data);
        // }
        // if($request->option_e){
        //     $data = array('cavab'=>$request->option_e, 'is_correct'=>$request->input('is_correct5'), 'sual_id'=>$id['sual_id']);
        //     $required = $required->merge($data);
        // }
        // // dd($required);
        // Cavablar::insert($required->toArray());
        Cavablar::insert($data);

        return redirect('/suallar');
    }


    public function quizler(){
        $print = new Quiz_Topic;
        $print = $print::where('director', Auth::user()->id)->get()->toArray();
        // dd($print);
        return view('teacher_quizler',[
            'print' => $print
        ]);
    }
    public function title($id, $is_public){
        $suallars = new Suallar;
        $cavablars= new Cavablar;
        $topic = new TopicsQuestions;
        $suallars = $suallars->get()->toArray();
        $join = $cavablars::leftJoin('suallars', 'suallars.sual_id', '=', 'cavablars.sual_id')->leftJoin('topics_questions', 'topics_questions.sual_id','=','suallars.sual_id')->where('topics_questions.topic_id', $id)->whereNull('topics_questions.deleted_at')->get()->groupBy('sual_id')->toArray();
        // dd($join);
        // dd($suallars);
        return view('teacher_quizler_title',[
            'suallars' => $suallars,
            'id' => $id,
            'join' => $join,
            'is_public' => $is_public
        ]);
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
        
        return redirect('/quizler');
    }
    public function insert_quiz_question(TopicsQuestionsRequest $request, $id){
       
        $t_q = new TopicsQuestions;
        $check = new TopicsQuestions;
        // dd($request->question);
        $t_q->topic_id = $id;
        // dd($id);
        $t_q->sual_id = $request->question;
        $t_q->save();
        return back()->withInput();
    }
    public function destroy($topic_id,$sual_id){
        $destroy = new TopicsQuestions;
        $destroy = $destroy->where('sual_id', $sual_id)->where('topic_id', $topic_id)->delete();
        return back()->withInput();
    }
    public function destroy2($sual_id){
        $destroy = new Suallar;
        $cavablars = new Cavablar;
        $topics_questions = new TopicsQuestions;
        $destroy = $destroy->where('sual_id', $sual_id)->delete();
        $cavablars = $cavablars->where('sual_id', $sual_id)->delete();
        $topics_questions = $topics_questions->where('sual_id', $sual_id)->delete();
        return back()->withInput();
    }
    public function fin(FinRequest $request, $id){
        $fin = new Fin;
        $user = new Users;
        $user = $user->select('id')->where('Fincode', $request->fin)->get()->toArray();
        $user_id = $user[0]['id'];
        $fin->topic_id = $id;
        $fin->user_id = $user_id ;
        $fin->save();
        return back()->withInput();
    }
}
