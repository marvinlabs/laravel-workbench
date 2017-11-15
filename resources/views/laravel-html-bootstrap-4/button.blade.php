@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        <h1>Basic submit buttons</h1>

        @foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
            {!! bs()->submit($type, $type) !!}
        @endforeach

        <h1>Outlined buttons</h1>

        @foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
            {!! bs()->button($type, $type, true) !!}
        @endforeach

        <h1>Links</h1>

        @foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
            {!! bs()->a('#', $type)->asButton($type) !!}
        @endforeach


    </div>
@endsection