<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('empleado.panel');
})->name('empleado.panel');