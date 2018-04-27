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

Route::get('/font-awesome',
    function () {
        return view('laravel-html-font-awesome.tests');
    });

Route::get('/bootstrap-4/{category}',
    function ($category) {
        return view("laravel-html-bootstrap-4.{$category}")
            ->withCategory($category);
    });

Route::get('/menus/{category}',
    function ($category) {
        return view("laravel-menus.{$category}")
            ->withCategory($category);
    })->name('demo.menu');

Route::match(['post', 'put'],
    '/bootstrap-4/{category}',
    function ($category) {
        return redirect()->back()
                         ->withInput()
                         ->withErrors([
                             'first_name'         => 'The first name is required',
                             'last_name'          => 'The last name is required',
                             'email'              => 'This is a sample error for emails',
                             'agree_terms'        => 'You must check this box!',
                             'avatar'             => 'Pick a file',
                             'avatar'             => 'Pick a file',
                             'lonely_radio'       => 'This is an error below the lonely radio',
                             'radio_field'        => 'This is an error below the radio group',
                             'inline_radio_field' => 'This is an error below the inline radio group',
                             'avatar2'            => 'This file is required',
                         ]);
    })->name('form-submit');
