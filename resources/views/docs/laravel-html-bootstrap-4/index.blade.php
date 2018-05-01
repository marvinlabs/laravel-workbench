@extends('layouts.bs')
@section('page.title', 'Laravel HTML Bootstrap 4')
@section('page.body')
    <div class="container">
        {{ bs()->openForm('put', '#') }}

        @include("docs.$package.$view")

        {{ bs()->submit('Submit') }}
        {{ bs()->closeForm() }}
    </div>
@endsection
