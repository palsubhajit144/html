<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsAdmin;
use App\Http\Controllers\UserMgmt;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::view('/','welcome');
// Route::view('/home','home'); #without 'GET' using view we can route & view webpage,
                             # but for also use the 'controller' we need to use 'GET' method.


Route::get('/',[CmsAdmin::class,'home']);
Route::get('/user/{name}',[UserMgmt::class,'getuser']);
Route::get('login',[UserMgmt::class,'admin']);