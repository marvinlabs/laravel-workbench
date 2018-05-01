@extends('layouts.bs')
@section('page.title', 'Laravel HTML Bootstrap 4')
@section('page.body')
    <div class="container my-5">
        @if (is_array($views))
            <h1 class="mb-5">Index for package {{ $package }}</h1>

            <ul>
                @foreach($views as $view)
                    <li class="mb-2 h5"><a href="{{ url("/docs/$package/$view") }}">{{ $view }}</a></li>
                @endforeach
            </ul>
        @else
            {{ bs()->a(url("/docs/$package"), '« Back to doc index')
                   ->asButton('dark', true)
                   ->addClass('my-3 float-right') }}

            @unless($views==='forms')
                {{ bs()->openForm('put', '#', ['files' => true]) }}
            @endunless

            @include("docs.$package.$views")

            @unless($views==='forms')
                {{ bs()->submit('Submit') }}
                {{ bs()->closeForm() }}
            @endunless
        @endif
    </div>
@endsection
