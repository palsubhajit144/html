<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddUser extends Controller
{
    //
    public function adduser(Request $req){
        $req->validate([
            'firstname'=>'required | min:3 | max:20',
            'lastname'=>'required | min:3 | max:20',
            'email'=>'required | email',
            'password'=>'required',
            'aadhar_number'=>'required | min:12 | max:12',
            'phone_number'=>'required | min:10 | max:10',
            'pan_number'=>'required | min:10 | max:10',
            'pincode'=>'required | min:6 | max:6',

        ]);
        return $req;
        
        echo "User Host is " . $req->getHost();

    }
}
