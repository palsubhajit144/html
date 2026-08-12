<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentRegistration extends Controller
{
    //
    public function registration(Request $data) {
        return view('college.preview', ['college_data' => $data->all()]);

    }
}
