<?php

use Illuminate\Support\Facades\Route;

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
