<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "Hello World!!!";
});


Route::get('/welcome', function (){
    return "Welcome to Laravel!!!";
});

Route::get('/task', function(){
    return ['study', 'eat', 'sleep'];
});