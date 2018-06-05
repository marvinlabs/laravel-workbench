# Radio groups

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/forms/#checkboxes-and-radios-1)

## Basic usage

<div class="my-3">
{{ bs()->radioGroup('agree_terms_0[]', [
                  'y' => 'I am interested!',
                  'n' => 'No, thanks.',
              ]) }}
</div>

<div class="my-3">
{{ bs()->radioGroup('agree_terms_1', [
                  'y' => 'I am interested!',
                  'n' => 'No, thanks.',
              ], 'y') }}
</div>

<div class="my-3">
{{ bs()->radioGroup('agree_terms_2', [
           'y' => 'I am interested!',
           'n' => 'No, thanks.',
       ])
       ->selectedOption('y') }}
</div>

## HTML description

<div class="my-3">
{{ bs()->radioGroup('agree_terms_3', [
           'y' => 'I am interested! <a href="#">details</a>',
           'n' => 'No, thanks.',
       ])
       ->selectedOption('y') }}
</div>

## Calling methods on radio buttons

You can prepend the `Radio` method names with radio in order to call that method on all
the radio buttons contained in the group.

For example, to disable all buttons (`disabled` method), you would call the `radioDisabled` 
function on the group. Here are the rules:

- `group->radioMyMethod()` &rarr; `group->radios->each->myMethod()` (eg. `disabled()`)
- `group->addRadioMethod()` &rarr; `group->radios->each->addMethod()` (eg. `addClass()`)
- `group->forgetRadioMethod()` &rarr; `group->radios->each->forgetMethod()` (eg. `forgetAttribute()`)

<div class="my-3">
{{ bs()->radioGroup('agree_terms_4', [
           'y' => 'I am disabled!',
           'n' => 'Me too!',
       ])
       ->radioDisabled() }}
</div>

<div class="my-3">
{{ bs()->radioGroup('agree_terms_5', [
           'y' => 'CSS classes got added...',
           'n' => '...to each radio',
       ])
       ->addRadioClass(['bg-light', 'my-3']) }}
</div>


## Wrapped inside a form group

It can be wrapped inside a form group if needed (to show errors for instance).

<div class="my-3">
{{ bs()->formGroup()
       ->label('Please select an option', true)
       ->control(bs()->radioGroup('agree_terms', [
               'y' => 'I am interested!',
               'n' => 'No, thanks.',
           ], 'y'))
       ->helpText('This is the help text of the radio group') }}
</div>


