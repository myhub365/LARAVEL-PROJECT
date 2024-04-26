<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/insert', function () {
    return view('insert');
});
Route::get('/w', function () {
    return view('website');
});

Route::post('go',[myc::class,'insert']);

Route::get('s',[myc::class,'show']);
Route::get('delete/{id}',[myc::class,'delete']);
Route::get('update/{id}',[myc::class,'upshow']);
Route::post('edit',[myc::class,'update']);
Route::get('w',[myc::class,'wshow']);


Route::get('/z', function () {
    return view('zoom');
});


Route::get('zoom/{id}',[myc::class,'zshow']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/insert', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/s', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
use App\Http\Controllers\myc;
