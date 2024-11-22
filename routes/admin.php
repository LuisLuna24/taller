<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('admin.panel');
})->name('admin.panel');