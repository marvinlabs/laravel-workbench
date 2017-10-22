@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')

    <div class="container">

        <h1>Alerts</h1>

        @component('bs::alert', ['type' => 'danger'])
            A simple alert of danger type
        @endcomponent

        @component('bs::alert', ['type' => 'success'])
            This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        @endcomponent

        @component('bs::alert', ['type' => 'info', 'animated' => true, 'dismissible' => true])
            Animated alert, and dismissible
        @endcomponent

    </div>

@endsection