<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsAdmin;
use App\Http\Controllers\UserMgmt;
use App\Http\Controllers\Index;
use App\Http\Controllers\UserForm;
use App\Http\Controllers\AddUser;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Upload;
use App\Http\Controllers\StudentRegistration;

use App\Models\User;

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

Route::controller(UserMgmt::class)->group(function(){
    Route::get('/user/{name}','getuser');
    Route::get('/login','admin');
    Route::get('/about','about');
});

Route::get('/index/{name}',[Index::class,'index']);
Route::view('/user-form','user-form')->name('user-form');
Route::post('adduser',[AddUser::class,'adduser']);
Route::get('/manage_user', [UserController::class, 'manage_user'])->name('manage_user');
Route::get('/student',[StudentController::class,'getstudent']);

Route::view('/upload','upload');
Route::post('upload',[Upload::class,'Upload']);

Route::get('/uploaded-file/{filename}', [Upload::class, 'viewFile'])
    ->where('filename', '.*');

Route::get('/view-file/{filename}', [Upload::class, 'viewer'])
    ->where('filename', '.*');


// College
// Route::view('/student/registration','college.registration')->name('student_reg');
Route::get('/student/registration', function () { 
    return view ('college.registration');
    })->name('student_reg');
Route::post('/student/reg_data', [StudentRegistration::class,'registration']);

Route::view('/student/login','college.student')->name('student_login');
Route::view('/master/login','college.master')->name('master_login');