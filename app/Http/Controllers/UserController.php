<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Select Query
    // public function manage_user(){
    //     // $users =  DB::select('select * from users');
    //     $users = DB::table('users')->get();
    //     return view('manage_user', ['users' => $users]);
    // }

    // Select Query With Where Condition
    // public function manage_user(){
    //     $users = DB::table('users')->select('id','name','email','phone')->where('phone','1234567891')->get();
    //     return view('manage_user',['users'=>$users]);
    // }

    // Select Query With Where Condition
    // public function manage_user(){
    //     $users = DB::table('users')->where('phone','1234567891')->get();
    //     return view('manage_user',['users'=>$users]);
    // }

    //Insert Query

    // public function manage_user(){
    //     $users = DB::table('users')->insert([
    //         'name' => 'tony',
    //         'email' => 'tony@email.com',
    //         'phone' => '7894561235'
    //     ]);

    //     if ($users) {
    //         return "New Data Inserted.";
    //     }else{
    //         return "Data Not Inserted.";
    //     }
        
    // }

    // Update Query
    // public function manage_user(){
    //     $users = DB::table('users')->where('name','anil')->update(['phone'=>'985475610']);
        
    //     if ($users) {
    //         return "Data Updated.";
    //     }else{
    //         return "Data Not Updated.";
    //     }
        
    // }

    // Delete Query
    public function manage_user(){

        $name = 'tony';

        $users = DB::table('users')->where('name',$name)->delete();
        if ($users) {
            return "Data Deleted.";
        }else{
            return "Data Not Deleted.";
        }

    }

}
