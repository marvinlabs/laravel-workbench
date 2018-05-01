# Forms

## Open a form

Simply open a form on the /user URL with POST method.

<div class="my-3">
{{ bs()->openForm('post', '/user') }}
</div>

Do not forget to close it when you are done!

<div class="my-3">
{{ bs()->closeForm() }}
</div>

### Open options

The 3rd parameter of the `openForm` function accepts some options. 

<div class="my-3">
{{ bs()->openForm('post', '/user', [ /* Your options here */ ]) }}
</div>

#### Files

If you have file input fields inside the form, make sure to set the `files` option
to true. This will generate the `enctype` HTML attribute. 

<div class="my-3">
'files' => true
</div>

#### Model binding

This will automatically populate fields from the corresponding model properties.

For instance, if the form is bound to `$user`, a field with name `username` would 
be populated from the attribute `$user->username`.

<div class="my-3">
'model' => $user
</div>

For instance:

<div class="my-3">
{{ bs()->openForm('post', '/user', ['model' => $user]) }}
{{   bs()->text('username') }}
{{ bs()->closeForm() }}
</div>

#### Hiding errors

If you are displaying the validation errors by yourself, you may want to disable the 
messages which get inserted below each form field.

<div class="my-3">
'hideErrors' => true
</div>

#### Inline forms

You can generate inline forms as described on the 
[Bootstrap documentation](https://getbootstrap.com/docs/4.0/components/forms/#inline-forms). 
Just enable that option.

<div class="my-3">
'inline' => true
</div>

#### Additional attributes

You can set additional attributes on the opened form tag. Just pass them as an associative
array.

<div class="my-3">
'attributes' => [
    'id'       => 'create_user_form',
    'v-cloack' => '',
]
</div>
