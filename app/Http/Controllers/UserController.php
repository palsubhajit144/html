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
        return view('profile', [
                        'name' => 'Alice',
                        'age' => 22,
                        'city' => 'Kolkata'
                        ]);
    }
}
