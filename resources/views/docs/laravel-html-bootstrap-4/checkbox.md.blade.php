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

### Checkboxes with name representing an array of options

<div class="my-3">
{{ bs()->checkbox('hobbies[]')->id('hobby_ski')->description('Skiing') }}
{{ bs()->checkbox('hobbies[]')->id('hobby_surf')->description('Surfing') }}
{{ bs()->checkbox('hobbies[]')->id('hobby_dive')->description('Diving') }}
</div>

<div class="my-3">
{{ bs()->checkbox('frameworks[laravel][is_selected]')->description('Laravel') }}
{{ bs()->checkbox('frameworks[symfony][is_selected]')->description('Symfony') }}
{{ bs()->checkbox('frameworks[cakephp][is_selected]')->description('CakePHP') }}
</div>

## Wrapped inside a form group

It can be wrapped inside a form group if needed (to show errors for instance).

<div class="my-3">
{{ bs()->formGroup()
       ->label('Terms of Use', true)
       ->control(bs()->checkbox('agree_terms')
                     ->description('I have read the <a href="#">terms of use</a>')) }}
</div>



