<?php

use Illuminate\Support\Facades\Route;
use App\Student;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});

Route::get('/db', function () {
    $student = Student::all();
    return view('db', ['students' => $student]);
});

Route::get('/email', function () {
    $mail = new \stdClass();
    $mail->sender = 'me@home.es';
    $mail->received = 'you@home.es';
    Mail::to('you@home.es')->send(new TestEmail());
    return view('email');
});

