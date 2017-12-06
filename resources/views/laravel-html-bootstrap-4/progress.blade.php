@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        <h1 class="mt-5 mb-4">Progress</h1>

        @foreach ([0, 25, 50, 75, 100] as $progress)
            {!! bs()->progress()->addProgress($progress)->addClass('my-3') !!}
        @endforeach

        <h1 class="mt-5 mb-4">Progress height</h1>

        @foreach ([2, 10, 25] as $height)
            {!! bs()->progress()->addProgress(random_int(20, 50))->height($height)->addClass('my-3') !!}
        @endforeach

        <h1 class="mt-5 mb-4">Progress background</h1>

        @foreach (['primary', 'secondary', 'success', 'info', 'danger', 'warning', 'light', 'dark'] as $background)
            {!! bs()->progress()->addProgress(random_int(20, 50), ['background' => $background])->addClass('my-3') !!}
            {!! bs()->progress()->addProgress(random_int(20, 50), ['background' => $background, 'striped' => true])->addClass('my-3') !!}
        @endforeach

        <h1 class="mt-5 mb-4">Progress label</h1>

        {!! bs()->progress()->addProgress(50, ['autoLabel' => true])->addClass('my-3') !!}
        {!! bs()->progress()->addProgress(50, ['label' => 'fifty percent'])->addClass('my-3') !!}

        <h1 class="mt-5 mb-4">Progress bounds</h1>

        {!! bs()->progress()->addProgress(0, ['min' => -3, 'max' => 3, 'label' => 0])->addClass('my-3') !!}
        {!! bs()->progress()->addProgress(0.66, ['max' => 1, 'label' => 0.66])->addClass('my-3') !!}

        <h1 class="mt-5 mb-4">Multiple bars</h1>

        {!! bs()->progress()
                    ->addProgress(10, ['background' => 'success'])
                    ->addProgress(20, ['background' => 'warning'])
                    ->addProgress(40, ['background' => 'danger'])
                    ->addClass('my-3') !!}

        <p class="mb-5"></p>
    </div>
@endsection