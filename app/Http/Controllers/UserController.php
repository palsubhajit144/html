<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUserName(string $name){
        return view('getuser',['key'=>$name]);  
    }

    public function profile(){
        $users = ['subha', 'sourav', 'subhajit', 'subhankar', 'subham', 'subhadeep', 'subhrangshu'];
        return view('profile', [
                        'name' => 'Alice',
                        'age' => 22,
                        'city' => 'Kolkata',
                        'users' => $users
                        ]);
    }

    
}
