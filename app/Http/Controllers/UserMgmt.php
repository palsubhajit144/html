<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMgmt extends Controller
{
    //

    public function getuser(string $name){
        $users=[$name, 'Riju'];
            return view('user',[
                'key'=>$name,
                'users'=>$users
                ]);
    }

    public function admin(){
        return view('admin.login');
    }

    public function about(){
        return view('about');

    }
}
