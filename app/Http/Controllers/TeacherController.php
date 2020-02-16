<?php

namespace App\Http\Controllers;
use App\Suallar;
use App\Cavablar;
use App\Http\Requests\SuallarRequest;
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

        $id= Suallar::orderBy('sual_id','desc')->get()->first();
        $id=collect($id);
        $id->toArray();

        // dd($suallars);

        $cavablars->cavab=$request->option_a;
        $cavablars->is_correct=$request->is_correct;
        $cavablars->sual_id=$id['sual_id'];
        dd($request->is_correct);

        

        $cavablars->cavab=$request->option_b;
        $cavablars->is_correct=$request->is_correct2;
        $cavablars->sual_id=$id['sual_id']; 
        //dd($cavablars);
        
      
        $cavablars->cavab=$request->option_c;  
        $cavablars->is_correct=$request->is_correct3; 
        $cavablars->sual_id=$id['sual_id'];
        
        
        $cavablars->cavab=$request->option_d;
        $cavablars->is_correct=$request->is_correct4;
        $cavablars->sual_id=$id['sual_id'];


        $cavablars->cavab=$request->option_e;
        $cavablars->is_correct=$request->is_correct5;
        $cavablars->sual_id=$id['sual_id'];

        


        $suallars->save();
        $cavablars->save();
        return redirect('/teacher_suallar');
    }


    public function quizler(){
        return view('teacher_quizler');
    }
    public function title(){
        return view('teacher_quizler_title');
    }
}
