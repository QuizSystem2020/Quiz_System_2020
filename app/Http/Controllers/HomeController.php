<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;


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
<<<<<<< HEAD
        
        if(Auth::user()->ismentor == 1)
=======
        if( Auth::user()->ismentor == 1)
>>>>>>> f596a7e881f4c5ed8dbeb09aa69d6e664afaa90e
        {
            return view('teacher_main');
        }else
        {
            return view('student_main');
        }
        return view('home');
    }
}
