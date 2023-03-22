<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-template', function () {
    return view('admin-template');
});
Route::get('/customer-template', function () {
    return view('customer-template');
});

