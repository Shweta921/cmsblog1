<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $students =  \App\Models\Student::all();
        
        return view('home.index',compact('students'));
    }
    public function dashboard(){

        $blogs =  \App\Models\Student::all();
        
        return view('dashboard',compact('blogs'));
    }
}
