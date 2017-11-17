@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        @component('bs::jumbotron')
            @slot('heading')
                Hello, world!
            @endslot
            @slot('subheading')
                This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured
                content or information.
            @endslot

            <hr class="my-3">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

            @slot('actions')
                {!! bs()->a('#', 'Learn more')->asButton('primary') !!}
            @endslot
        @endcomponent
    </div>

    @component('bs::jumbotron', ['fluid' => true])
        @slot('heading')
            Hello, fluid world!
        @endslot
        @slot('subheading')
            This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured
            content or information.
        @endslot

        <hr class="my-3">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

        @slot('actions')
            {!! bs()->a('#', 'Learn more')->asButton('primary') !!}
        @endslot
    @endcomponent
@endsection