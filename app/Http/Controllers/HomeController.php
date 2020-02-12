<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======

>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
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
<<<<<<< HEAD
        $this->middleware(['auth', 'verified']);
=======
        $this->middleware('auth');
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        if($id = Auth::user()->ismentor == 1)
        {
            return view('teacher_main');
        }else
        {
            return view('student_main');
        }
        
=======
        return view('home');
>>>>>>> c67004209b3bf2903d93f354d6732a17ece5c48d
    }
}
