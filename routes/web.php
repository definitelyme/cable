<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('/');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', "ContactController@index")->name('contact');
