<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/menu', 'home'); 
Route::view('/agenda', 'agenda');
