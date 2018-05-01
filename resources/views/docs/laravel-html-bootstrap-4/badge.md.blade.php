# Badges

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/badge/)

## Basic usage

<div class="my-3">
{{ bs()->badge()->text('Secondary by default') }}
</div>

<div class="my-3">
{{ bs()->badge()->text('Show as a pill')->pill() }}
</div>

<div class="my-3">
{{ bs()->badge('info')->text('I am clickable!')->link('#') }}
</div>

## All badges types

<div class="my-3">
<table class="table">
    @foreach (['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'] as $type)
        <tr>
            <th>{{ $type }}</th>
            <td>{{ bs()->badge($type)->text($type) }}</td>
        </tr>
    @endforeach
</table>
</div>



