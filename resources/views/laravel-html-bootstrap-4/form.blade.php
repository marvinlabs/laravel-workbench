@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        <h1>Simple form</h1>

        {{ bs()->openForm('put', route('form-submit', [$category])) }}

            {{ bs()->input('first_name', 'First name', 'text') }}
            {{ bs()->input('last_name', 'Last name', 'text') }}
            {{ bs()->input('email', 'Email address', 'email') }}
            {{ bs()->submit('Register') }}

        {{ bs()->closeForm() }}

        <h1>Another simple form</h1>

        {{ bs()->openForm('get', route('form-submit', [$category])) }}


        {{ bs()->closeForm() }}
</div>
@endsection