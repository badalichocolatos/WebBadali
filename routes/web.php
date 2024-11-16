<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});


Route::get('/beranda', function () { return view('beranda');});

Route::get('/kontak', function () { return view('kontak');});

Route::get('/status', function () { return view('status');});

Route::get('/profil', function () { return view('profil');});

Route::get('/galery', function () { return view('galery');});