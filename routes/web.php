<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
// Route::view('/','welcome');
Route::view('/home','home'); #without 'GET' using view we can route & view webpage,
                             # but for also use the 'controller' we need to use 'GET' method.

Route::get('/about/{name}',function($name){
    echo $name;
    return view('about');
});