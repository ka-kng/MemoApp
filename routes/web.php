<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('memo.home');
})->middleware(['auth', 'verified']);
