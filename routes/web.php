<?php

use Illuminate\Support\Facades\Route;
use Emreokay\Routix\Http\Controllers\RoutixController;
use Emreokay\Routix\Http\Controllers\SessionController;
use Emreokay\Routix\Http\Controllers\TestingController;

Route::get('/',[RoutixController::class,'index'])->name('index');

// Session
Route::prefix('session')->group(function (){
    Route::post('/login',[SessionController::class,'login'])->name('login');
    Route::delete('/logout',[SessionController::class,'logout'])->name('logout');
});

// Testing
Route::prefix('testing')->group(function (){
    Route::get('turkey',[TestingController::class,'turkey'])->name('turkey');
    Route::get('turkey/izmir',[TestingController::class,'izmir'])->name('turkey.izmir');
    Route::get('turkey/izmir/odemis',[TestingController::class,'odemis'])->name('turkey.izmir.odemis');
});
