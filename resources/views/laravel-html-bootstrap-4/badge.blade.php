@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')

    <div class="container">

        <h1>Badges</h1>

        <p>
        {!! bs()->badge()->text('Secondary by default') !!}
        </p>

        <p>
            @foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
                {!! bs()->badge($type)->text($type) !!}
            @endforeach
        </p>

        <h1>Badges with links</h1>

        <p>
            @foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
                {!! bs()->badge($type)->text($type)->link('#') !!}
            @endforeach
        </p>
    </div>

@endsection