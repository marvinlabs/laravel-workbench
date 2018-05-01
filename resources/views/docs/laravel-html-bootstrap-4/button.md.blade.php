# Buttons

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/buttons/)

## Basic usage

<div class="my-3">
{{ bs()->button('Plain button', 'secondary') }}
</div>

<div class="my-3">
{{ bs()->button('Outlined button', 'secondary', true) }}
</div>

<div class="my-3">
{{ bs()->a('#', 'Link as a button')->asButton('secondary') }}
</div>

## All buttons types

<div class="my-3">
<table class="table">
    @foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
        <tr>
            <th>{{ $type }}</th>
            <td>{!! bs()->submit($type, $type) !!}</td>
            <td>{!! bs()->submit($type, $type, true) !!}</td>
            <td>{!! bs()->a('#', $type)->asButton($type) !!}</td>
        </tr>
    @endforeach
</table>
</div>



