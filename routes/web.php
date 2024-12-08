<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function(){
    if (app()->environment('local')) {
        return view('dbconn');
    }
    abort(403, 'Unauthorized access.');
});

Route::get('/images/AmarPoth-Favicon.ico', function () {
    return response()->file(public_path('images/AmarPoth-Favicon.ico'));
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get("/process_signup", function (){
    return view("process_signup");
});

route::post('/process_signup', function(){
    $user = new User();
    $user->name = request('name');
    $user->email = request('email');
    $user->mobile = request('mobile');
    $user->password = request('password');
    $user->save();
});
