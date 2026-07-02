<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsAdmin extends Controller
{
    //
    public function home(){
        return view('home', [
            'title' => 'Home Page',
            'content' => 'This is the home page content.'
        ]);
    }
}
