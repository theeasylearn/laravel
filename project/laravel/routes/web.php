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

Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::get('/admin-forgot-password', function () {
    return view('admin-forgot-password');
});

Route::get('/admin-category', function () {
    return view('admin-category');
});

Route::get('/admin-create-category', function () {
    return view('admin-create-category');
});

Route::post('/admin-create-category', function () {
    echo "category inserted.....";
    // return view('admin-create-category');
});

Route::get('/admin-edit-category', function () {
    return view('admin-edit-category');
});

Route::post('/admin-create-category', function () {
    echo "category edit.....";
    // return view('admin-create-category');
});

Route::get('/admin-delete-category', function () {
    echo "category delete.....";
    //return view('admin-delete-category');
});

Route::get('/admin-product', function () {
    return view('admin-product');
});

Route::get('/admin-create-product', function () {
    return view('admin-create-product');
});

Route::post('/admin-create-product', function () {
    echo "product inserted.....";
    // return view('admin-create-category');
});

Route::get('/admin-edit-product', function () {
    return view('admin-edit-product');
});

Route::post('/admin-edit-product', function () {
    echo "product edit.....";
    // return view('admin-create-category');
});


