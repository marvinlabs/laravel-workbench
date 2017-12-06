@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        <h1 class="mt-5 mb-4">Alerts</h1>

        @component('bs::alert', ['type' => 'danger'])
            A simple alert of danger type
        @endcomponent

        @component('bs::alert', ['type' => 'success'])
            This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
            like.
        @endcomponent

        @component('bs::alert', ['type' => 'info', 'animated' => true, 'dismissible' => true])
            Animated alert, and dismissible
        @endcomponent

        @component('bs::alert', ['type' => 'dark'])
            @slot('heading')
            An alert with heading
            @endslot

            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit
               longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        @endcomponent

        @component('bs::alert', ['type' => 'warning', 'data' => ['alert-id' => 40, 'context' => 'sample-code']])
            An alert with some data attributes
        @endcomponent

    </div>
@endsection