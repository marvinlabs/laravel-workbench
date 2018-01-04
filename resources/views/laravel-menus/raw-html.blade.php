@extends('layouts.basic')

@section('page.title', 'Laravel Menus')

@section('page.body')

    <h1>Raw HTML presenter</h1>

    {!! Menu::render('html') !!}

@endsection