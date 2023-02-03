<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/single', function () {
    return view('pages.single');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/showcase', function () {
    return view('pages.showcase');
});
Route::get('/contact', function () {
    return view('pages.contact');
});