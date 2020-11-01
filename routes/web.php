<?php

use Illuminate\Support\Facades\Route;
use Emreokay\Routix\Http\Controllers\RoutixController;

Route::get('routix',[RoutixController::class,'index'])->name('index');
