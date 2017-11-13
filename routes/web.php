<?php

use Illuminate\Support\Facades\Route;

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
    return view("laravel-html-bootstrap-4.{$category}")
        ->withCategory($category)
        ->withErrors([
            'first_name' => 'The first name is required',
            'email'      => 'This is a sample error for emails',
        ]);
});

Route::post('/bootstrap-4/{category}', function ($category) {
    return view("laravel-html-bootstrap-4.{$category}")->withErrors([
        'last_name' => 'Now there is an error on the last name',
    ]);
})->name('form-submit');
