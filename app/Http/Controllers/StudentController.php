<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getstudent(){
        $students= \App\Models\student::all();
        return view('students',[
            'students'=>$students
        ]);
    }
}
