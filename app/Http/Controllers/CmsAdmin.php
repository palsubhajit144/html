<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsAdmin extends Controller
{
    //
    public function home() {

        $title="Home Page";
        $content="This Home Page is Managed from CmsAdmin Controller.";

        return view('home',[
            'title' => $title,
            'content' => $content
        ]);
            
        }
}
