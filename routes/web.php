<?php

use Illuminate\Support\Facades\Route;
use Emreokay\Routix\Http\Controllers\RoutixController;
use Emreokay\Routix\Http\Controllers\TestingController;

Route::get('routix',[RoutixController::class,'index'])->name('index');

// Testing
Route::prefix('testing')->group(function (){
    Route::get('turkey',[TestingController::class,'turkey'])->name('turkey');
    Route::get('turkey/izmir',[TestingController::class,'izmir'])->name('turkey.izmir');
    Route::get('turkey/izmir/odemis',[TestingController::class,'odemis'])->name('turkey.izmir.odemis');
    Route::get('turkey/izmir/tire',[TestingController::class,'tire'])->name('turkey.izmir.tire');
    Route::get('turkey/istanbul',[TestingController::class,'istanbul'])->name('turkey.istanbul');
    Route::get('turkey/istanbul/kadikoy',[TestingController::class,'kadikoy'])->name('turkey.istanbul.kadikoy');
    Route::get('turkey/istanbul/taksim',[TestingController::class,'taksim'])->name('turkey.istanbul.taksim');
    Route::get('turkey/ankara',[TestingController::class,'ankara'])->name('turkey.ankara');
    Route::get('turkey/ankara/cankaya',[TestingController::class,'cankaya'])->name('turkey.ankara.cankaya');
    Route::get('turkey/ankara/kecioren',[TestingController::class,'kecioren'])->name('turkey.ankara.kecioren');
    Route::get('turkey/kutahya',[TestingController::class,'kutahya'])->name('turkey.kutahya');
    Route::get('turkey/kutahya/tavsanli',[TestingController::class,'tavsanli'])->name('turkey.kutahya.tavsanli');
    Route::get('turkey/kutahya/gediz',[TestingController::class,'gediz'])->name('turkey.kutahya.gediz');
    Route::get('turkey/bursa',[TestingController::class,'bursa'])->name('turkey.bursa');
    Route::get('turkey/bursa/gorukle',[TestingController::class,'gorukle'])->name('turkey.bursa.gorukle');
    Route::get('turkey/bursa/nilufer',[TestingController::class,'nilufer'])->name('turkey.bursa.nilufer');
});
