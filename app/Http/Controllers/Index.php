<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    //
    public function index(string $name) {
        $users=$name;
        $title='Index Page';
        $content='This is Test Index Page.';
        return view('admin.index',
        [
            'title' => $title,
            'content'=> $content,
            'content2'=> "This page is maintained by $users"
        ]);
    }
}
