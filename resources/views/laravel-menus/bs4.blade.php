@extends('layouts.bs')

@section('page.title', 'Laravel Menus')

@section('page.body')

    <h1>Bootstrap 4 presenter</h1>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="navbar-brand">Navbar</a>

            {!! Menu::render('navbar-nav') !!}
        </nav>
    </div>

@endsection
