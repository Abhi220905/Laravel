<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "Hello World!!!";
});

/// Unit 1 - 5
Route::get('/welcome', function (){
    return "Welcome to Laravel!!!";
});

/// Unit 1 - 6
Route::get('/task', function(){
    return ['study', 'eat', 'sleep'];
});

/// Unit 1 - 7
Route::get('task/{name}', function($name){
    return "task name is $name";
});

/// Unit 1 - 8
Route::get('task/{name}/{priority}',function($name, $priority){
    return "The task name is $name and that was priority $priority";
});

// Unit 1 - 9
// Route:::get('task/')