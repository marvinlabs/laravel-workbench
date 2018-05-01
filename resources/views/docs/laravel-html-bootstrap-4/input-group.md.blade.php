# Input groups

[Bootstrap documentation](https://getbootstrap.com/docs/4.0/components/input-group/)

## Basic

Here are the bootstrap samples reproduced with the library.

<div class="my-3">
{{ bs()->inputGroup()
       ->prefix('@')
       ->control(bs()->text('username')->placeholder('Username')) }}
</div>

<div class="my-3">
{{ bs()->inputGroup()
       ->suffix('@example.com')
       ->control(bs()->text('username')->placeholder("Recipient's username")) }}
</div>

<div class="my-3">
{{ bs()->inputGroup()
       ->prefix('$')
       ->suffix('.00')
       ->control(bs()->text('amount')) }}
</div>

## Sizing

Input groups are sizable controls.

<div class="my-3">
{{ bs()->inputGroup()
       ->prefix('Small')
       ->control(bs()->text('username'))
       ->sizeSmall() }}
</div>

<div class="my-3">
{{ bs()->inputGroup()
       ->prefix('Default')
       ->control(bs()->text('username')) }}
</div>

<div class="my-3">
{{ bs()->inputGroup()
       ->prefix('Large')
       ->control(bs()->text('username'))
       ->sizeLarge() }}
</div>

## Multiple addons

You can add multiple addons before/after the control.

<div class="my-3">
{{ bs()->inputGroup()
       ->prefix('$')
       ->prefix('0.00')
       ->control(bs()->text('amount')) }}
</div>

<div class="my-3">
{{ bs()->inputGroup()
       ->suffix('$')
       ->suffix('0.00')
       ->control(bs()->text('amount')) }}
</div>

## With text area

The text area control is also supported.

<div class="my-3">
{{ bs()->inputGroup()
       ->prefix('Content')
       ->control(bs()->textArea('content')) }}
</div>

## With buttons

<div class="my-3">
{{ bs()->inputGroup()
       ->control(bs()->text('amount', '20'))
       ->prefix('$')
       ->suffix(bs()->button('Pay now', 'primary'), false) }}
</div>

## Wrapped inside a form group

It can be wrapped inside a form group if needed.

<div class="my-3">
{{ bs()->formGroup()
       ->label('Username')
       ->control(bs()->inputGroup()
                     ->prefix('@')
                     ->control(bs()->text('username'))) }}
</div>
