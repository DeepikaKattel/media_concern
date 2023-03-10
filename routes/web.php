<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about','App\Http\Controllers\AboutController@index')->name('about');
Route::get('/objective','App\Http\Controllers\AboutController@objective')->name('objective');
Route::get('/organization','App\Http\Controllers\AboutController@organization')->name('organization');
Route::get('/gallery','App\Http\Controllers\AboutController@gallery')->name('gallery');
Route::get('/contact','App\Http\Controllers\ContactController@index')->name('contact');
