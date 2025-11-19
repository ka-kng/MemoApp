<?php

use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('memo.index');
    });

    Route::resource('memo', MemoController::class);

});
