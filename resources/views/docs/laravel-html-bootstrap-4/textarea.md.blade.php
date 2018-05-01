# Text areas

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/forms/#form-controls)

## Basic

<div class="my-3">
{{ bs()->textArea('textArea', 'Lorem ipsum blah blah blah') }}
</div>

## Read-only

<div class="my-3">
{{ bs()->textArea('textArea_ro', 'This one is read only')->disabled() }}
</div>

<div class="my-3">
{{ bs()->text('plaintext', 'Read only and show as plain text')->readOnly(true) }}
</div>

## Wrapped inside a form group

It can be wrapped inside a form group if needed.

<div class="my-3">
{{ bs()->formGroup()
       ->label('Content')
       ->control(bs()->textArea('content', 'Lorem ipsum blah blah blah')) }}
</div>
