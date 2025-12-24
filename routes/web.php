<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/nosotros', function () {
    return view('about');
})->name('about');

Route::get('/servicios', function () {
    return view('services');
})->name('services');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');
