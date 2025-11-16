<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'memo.home')->middleware('auth');
