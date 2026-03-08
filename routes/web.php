<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return view('page');
});

Route::get('test',[TestController::class,'test']);
Route::view('/footer', 'footer1');
Route::view('/header', 'header');
