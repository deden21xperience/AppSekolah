<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function edit($profile)
    {
        // dd(auth()->user()->id);
        $student = \App\Student::find(auth()->user()->id);
        // dd($student->biodata->nama);
        // $studet = \App\Biodata::find($profile)->toArray();
        // $dataBaruDiisi = \App\Student::where();
        // dd($student);
        $progres = 35; //rubah di database
        return view('profile', compact('student', 'progres'));
    }
}
