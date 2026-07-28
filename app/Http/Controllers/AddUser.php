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

        ],[
            'firstname.required'=>'First Name is required',
            'firstname.min'=>'First Name must be at least 3 characters',
            'firstname.max'=>'First Name must not exceed 20 characters',
            'lastname.required'=>'Last Name is required',
            'lastname.min'=>'Last Name must be at least 3 characters',
            'lastname.max'=>'Last Name must not exceed 20 characters',
            'email.required'=>'Email is required',
            'email.email'=>'Email must be a valid email address',
            'password.required'=>'Password is required',
            'aadhar_number.required'=>'Aadhar Number is required',
            'aadhar_number.min'=>'Aadhar Number must be 12 digits',
            'aadhar_number.max'=>'Aadhar Number must be 12 digits',
            'phone_number.required'=>'Phone Number is required',
            'phone_number.min'=>'Phone Number must be 10 digits',
            'phone_number.max'=>'Phone Number must be 10 digits',
            'pan_number.required'=>'PAN Number is required',
            'pan_number.min'=>'PAN Number must be 10 characters',
            'pan_number.max'=>'PAN Number must be 10 characters',
            'pincode.required'=>'Pincode is required',
            'pincode.min'=>'Pincode must be 6 digits',
            'pincode.max'=>'Pincode must be 6 digits',
        ]);
        return $req;
        
        echo "User Host is " . $req->getHost();

    }
}
