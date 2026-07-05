<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsAdmin extends Controller
{
    //
    public function welcome(){
        return view('welcome');

    }

    public function home(){
        return view('home', [
            'title' => 'Home Page',
            'content' => 'This is the home page content.'
        ]);
    }
}
