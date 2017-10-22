<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/font-awesome', function () {
    return view('laravel-html-font-awesome.tests');
});

Route::get('/bootstrap-4/{category}', function ($category) {
    return view("laravel-html-bootstrap-4.{$category}");
});
