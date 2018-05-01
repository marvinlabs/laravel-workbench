# Radios

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/forms/#checkboxes-and-radios-1)

## Basic usage

<div class="my-3">
{{ bs()->radio('lonely_radio')
       ->description('This is a radio which is sitting here alone') }}
</div>

<div class="my-3">
{{ bs()->radio('lonely_radio_2')
       ->disabled()
       ->description('I am disabled') }}
</div>

## HTML description

<div class="my-3">
{{ bs()->radio('i_am')
       ->description('I am a <a href="#">human</a>') }}
</div>

## Wrapped inside a form group

It can be wrapped inside a form group if needed (to show errors for instance).

<div class="my-3">
{{ bs()->formGroup()
       ->label('Terms of Use', true)
       ->control(bs()->radio('agree_terms')
                     ->description('I have read the <a href="#">terms of use</a>')) }}
</div>

