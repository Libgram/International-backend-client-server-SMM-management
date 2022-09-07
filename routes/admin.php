<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
