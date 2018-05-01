# Text fields

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/forms/#form-controls)

## Basic

<div class="my-3">
{{ bs()->text('username')->placeholder('Username') }}
</div>

## Read-only

<div class="my-3">
{{ bs()->text('readonly', 'Read only')->readOnly() }}
</div>

<div class="my-3">
{{ bs()->text('plaintext', 'Read only and show as plain text')->readOnly(true) }}
</div>

## Sizing

Inputs are sizable controls in general.

<div class="my-3">
{{ bs()->text('username')->placeholder('Small')->sizeSmall() }}
</div>

<div class="my-3">
{{ bs()->text('username')->placeholder('Default') }}
</div>

<div class="my-3">
{{ bs()->text('username')->placeholder('Large')->sizeLarge() }}
</div>

## Wrapped inside a form group

It can be wrapped inside a form group if needed.

<div class="my-3">
{{ bs()->formGroup()
       ->label('Username')
       ->control(bs()->text('username')->placeholder('Username')) }}
</div>


