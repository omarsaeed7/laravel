<?php

use Illuminate\Support\Facades\Route;
// teacher routes
Route::get('{id}', function ($id) {
    return "hello : $id";
})->name('id');
