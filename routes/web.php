<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/started', function () {
    return view('started');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/transcript', function () {
    return view('transcript');
});