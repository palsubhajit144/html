<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function manage_user(){
        $users =  DB::select('select * from users');
        return view('manage_user', ['users' => $users]);
    }
}
