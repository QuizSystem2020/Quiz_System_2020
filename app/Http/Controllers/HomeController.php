<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');

        $this->middleware(['auth', 'verified']);

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');


        if($id = Auth::user()->ismentor == 1)
        {
            return view('teacher_main');
        }else
        {
            return view('student_main');
        }
        

        return view('home');
    }
}
