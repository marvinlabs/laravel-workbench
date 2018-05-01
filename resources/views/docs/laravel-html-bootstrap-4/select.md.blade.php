# Select

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/forms/#select-menu)

## Basic usage

<div class="my-3">
{{ bs()->select('country', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'], 'P') }}
</div>

## Multiple select

<div class="my-3">
{{ bs()->select('countries', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'])
       ->multiple()
       ->value(['P', 'FR']) }}
</div>

## Placeholder

<div class="my-3">
{{ bs()->select('country', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'])
       ->placeholder('Sélectionnez un pays') }}
</div>

<div class="my-3">
{{ bs()->select('country', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'])
       ->placeholder('Sélectionnez un pays', -1) }}
</div>

## Disabled

<div class="my-3">
{{ bs()->select('country', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'], 'P')
       ->disabled() }}
</div>

## Wrapped inside a form group

It can be wrapped inside a form group if needed.

<div class="my-3">
{{ bs()->formGroup()
       ->label('Country')
       ->control(bs()->select('country', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'], 'P')) }}
</div>


