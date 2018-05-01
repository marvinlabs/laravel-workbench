# Radio groups

[Bootstrap documentation](https://getbootstrap.com/docs/4.1/components/forms/#checkboxes-and-radios-1)

## Basic usage

<div class="my-3">
{{ bs()->radioGroup('agree_terms_0', [
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
{{ bs()->radio('i_am')
       ->description('I am a <a href="#">human</a>') }}
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


