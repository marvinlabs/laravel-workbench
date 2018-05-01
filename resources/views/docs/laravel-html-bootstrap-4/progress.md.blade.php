# Badges

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/badge/)

## Basic usage

<div class="my-3">
@foreach ([0, 25, 50, 75, 100] as $progress)
    {!! bs()->progress()->addProgress($progress)->addClass('my-3') !!}
@endforeach
</div>

## Progress height

You can specify a height in pixels too.

@foreach ([2, 10, 25] as $height)
<div class="my-3">
    {!! bs()->progress()
            ->addProgress(random_int(20, 50))
            ->height($height)
            ->addClass('my-3') !!}
@endforeach
</div>

## Progress background

<div class="my-3">
<div class="row">
@foreach (['primary', 'secondary', 'success', 'info', 'danger', 'warning', 'light', 'dark'] as $background)
    <div class="col-sm-6 my-3">{!! bs()->progress()->addProgress(random_int(20, 50), ['background' => $background]) !!}</div>
    <div class="col-sm-6 my-3">{!! bs()->progress()->addProgress(random_int(20, 50), ['background' => $background, 'striped' => true]) !!}</div>
@endforeach
</div>
</div>

## Progress label

<div class="my-3">
{!! bs()->progress()->addProgress(50, ['autoLabel' => true]) !!}
</div>

<div class="my-3">
{!! bs()->progress()->addProgress(50, ['label' => 'fifty percent']) !!}
</div>

## Progress bounds

<div class="my-3">
{!! bs()->progress()->addProgress(0, ['min' => -3, 'max' => 3, 'label' => 0]) !!}
</div>

<div class="my-3">
{!! bs()->progress()->addProgress(0.66, ['max' => 1, 'label' => 0.66]) !!}
</div>

## Multiple bars

<div class="my-3">
{!! bs()->progress()
        ->addProgress(10, ['background' => 'success'])
        ->addProgress(20, ['background' => 'warning'])
        ->addProgress(40, ['background' => 'danger'])
        ->addClass('my-3') !!}
</div>


