<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (){
   return 'Welcome to Dashboard';
});

Route::get('/users', function (){
    return ['Gio', 'Val'];
});

Route::redirect('/', '/dashboard');
