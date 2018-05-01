# Checkboxes

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/forms/#checkboxes-and-radios-1)

## Basic usage

<div class="my-3">
{{ bs()->checkbox('age_verification')
       ->description('I am above 18 years old') }}
</div>

<div class="my-3">
{{ bs()->checkbox('age_verification')
       ->description('I am checked')
       ->checked() }}
</div>

<div class="my-3">
{{ bs()->checkbox('age_verification', 'one liner way to set common stuff', true) }}
</div>

<div class="my-3">
{{ bs()->checkbox('age_verification')
       ->description('I am disabled') 
       ->disabled() }}
</div>

### HTML description

<div class="my-3">
{{ bs()->checkbox('agree_terms')
       ->description('I have read the <a href="#">terms of use</a>') }}
</div>

## Wrapped inside a form group

It can be wrapped inside a form group if needed (to show errors for instance).

<div class="my-3">
{{ bs()->formGroup()
       ->label('Terms of Use', true)
       ->control(bs()->checkbox('agree_terms')
                     ->description('I have read the <a href="#">terms of use</a>')) }}
</div>



