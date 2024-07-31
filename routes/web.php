<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('manual', function () {
    return view('user-manual');
})->name('manual');

Route::get('funciones', function () {
    return view('functions');
})->name('funciones');

Route::get('contacto', function () {
    return view('contact');
})->name('contacto');