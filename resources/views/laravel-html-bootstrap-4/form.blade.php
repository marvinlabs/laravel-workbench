@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        <h1 class="mt-5 mb-4">Simple form</h1>

        {{ bs()->openForm('put', route('form-submit', [$category])) }}

        {{ bs()->formGroup(bs()->text('first_name', 'John'))
                ->label('First name')
                ->helpText('This is some help text') }}

        {{ bs()->formGroup()
                ->control(bs()->inputGroup()
                        ->suffix(fa()->icon('user'))
                        ->control(bs()->text('last_name', 'Doe')))
                ->label('Last name') }}

        {{ bs()->formGroup(bs()->email('email')->placeholder('Your email address'))
                ->label('Email') }}

        {{ bs()->formGroup(bs()->checkBox('agree_terms', 'You have read and accept our terms and conditions')) }}

        {{ bs()->submit('Register') }}

        {{ bs()->closeForm() }}

        <h1 class="mt-5 mb-4">Inline form</h1>

        {{ bs()->openForm('put',
                          route('form-submit', [$category]),
                          ['inline' => true, 'hideErrors' => true, 'attributes' => ['id' => 'sample_form']]) }}

        {{ bs()->formGroup(bs()->text('first_name', 'John')->addClass('mb-2 mr-sm-2 mb-sm-0'))
                ->label('First name', true) }}

        {{ bs()->formGroup(bs()->inputGroup(bs()->text('username', 'johndoe')->addClass('mb-2 mr-sm-2 mb-sm-0'), '@'))
                ->label('Username', true) }}

        {{ bs()->checkBox('remember', 'Remember me')->addClass('mb-2 mr-sm-2 mb-sm-0') }}

        {{ bs()->checkBox('remember_disabled', 'Forget me (disabled)')->disabled()->addClass('mb-2 mr-sm-2 mb-sm-0') }}

        {{ bs()->submit('Submit', 'secondary')->child(fa()->icon('send')->addClass('ml-2')) }}

        {{ bs()->closeForm() }}

        <h1 class="mt-5 mb-4">Horizontal form</h1>

        {{ bs()->openForm('put', route('form-submit', [$category])) }}

        {{-- Manually create a row --}}
        {{ bs()->formGroup(bs()->text('first_name', 'John'))
                ->wrapControlIn(bs()->div()->addClass('col-sm-10'))
                ->label('First name', false, ['col-sm-2'])
                ->addClass('row')}}

        {{-- Create a row using the default configuration entry: config('bs4.form_rows.default') --}}
        {{ bs()->formGroup(bs()->inputGroup(bs()->text('username', 'johndoe'), '@'))
                ->label('Username', false)
                ->helpText('Your username here')
                ->showAsRow() }}

        {{-- Create a row using a custom configuration entry: config('bs4.form_rows.no_label') --}}
        {{ bs()->formGroup(bs()->checkBox('remember2', 'Remember me'))
                ->helpText('This is the checkbox control help text...')
                ->showAsRow('no_label')}}

        {{ bs()->formGroup(bs()->submit('Submit', 'secondary')->child(fa()->icon('send')->addClass('ml-2')))
                ->showAsRow('centered')}}

        {{ bs()->closeForm() }}

        <h1 class="mt-5 mb-4">Control sizes</h1>

        {{ bs()->formGroup()->control(
                bs()->text('large', 'Large')->sizeLarge()) }}

        {{ bs()->formGroup()->control(
                bs()->text('normal', 'Normal')) }}

        {{ bs()->formGroup()->control(
                bs()->text('small', 'Small')->sizeSmall()) }}

        <h1 class="mt-5 mb-4">Input groups</h1>

        {{ bs()->formGroup()->control(
                bs()->inputGroup(bs()->text('amount', '20.00'))->prefix('$')->prefix('0.00')) }}

        {{ bs()->formGroup()->control(
                bs()->inputGroup(bs()->text('amount', '20'), '$', '0.00')) }}

        {{ bs()->formGroup()->control(
                bs()->inputGroup(bs()->text('amount', '20'))
                    ->suffix(bs()->button('Click me', 'secondary', true), false)) }}

        {{ bs()->formGroup()->control(
                bs()->inputGroup(bs()->text('xl_ig', 'This is a large input group'), '$', '0.00')
                    ->sizeLarge()) }}

        <h1 class="mt-5 mb-4">Read only</h1>

        {{ bs()->formGroup()->control(
                bs()->text('readonly', 'Read only')->readOnly()) }}

        {{ bs()->formGroup()->control(
                bs()->text('plaintext', 'Read only and show as plain text')->readOnly(true)) }}

        <h1 class="mt-5 mb-4">Text areas</h1>

        {{ bs()->formGroup()->control(
                bs()->textArea('textArea', 'Lorem ipsum blah blah blah')) }}

        {{ bs()->formGroup()->control(
                bs()->text('plaintext', 'Read only and show as plain text')->readOnly(true)) }}

        {{ bs()->formGroup()->control(
                bs()->textArea('textArea_ro', 'This one is read only')->disabled()) }}

        <h1 class="mt-5 mb-4">Checkboxes</h1>

        {{ bs()->formGroup()->control(bs()->checkBox('cb1', 'This is a lonely checkbox control', true)) }}

        {{ bs()->formGroup()->control(bs()->checkBox('cb2', 'This is a lonely checkbox control', false)) }}

        {{ bs()->formGroup()->control(bs()->checkBox('cb3', 'This is a disabled checkbox control', true)
                                          ->disabled()) }}

        <h1 class="mt-5 mb-4">Radios</h1>

        {{ bs()->formGroup()->control(bs()->radio('lonely_radio', 'This is a lonely radio control', true))
                            ->helpText('This is the radio control help text...') }}

        {{ bs()->formGroup()->control(bs()->radio('lonely_radio2', 'This is a lonely radio control', false))
                            ->helpText('This is the radio control help text...') }}

        {{ bs()->formGroup()->control(bs()->radio('disabled_radio', 'This is a disabled radio control', true)
                                          ->disabled()) }}

        {{ bs()->formGroup()->control(bs()->radioGroup('radio_field',
                                                       [
                                                           'choice_1' => 'Choice 1',
                                                           'choice_2' => 'Choice 2',
                                                           'choice_3' => 'Choice 3',
                                                       ],
                                                       'choice_2'))
                            ->helpText('This is a radio group...') }}

        {{ bs()->formGroup()->control(bs()->radioGroup('inline_radio_field',
                                                       [
                                                           'choice_1' => 'Choice 1',
                                                           'choice_2' => 'Choice 2',
                                                           'choice_3' => 'Choice 3',
                                                       ],
                                                       'choice_2')
                                          ->inline())
                            ->helpText('... and another radio group, shown inline this time') }}

        <h1 class="mt-5 mb-4">Files</h1>

        {{ bs()->formGroup()->control(bs()->simpleFile('avatar')) }}
        {{ bs()->formGroup()->control(bs()->file('avatar2', 'Select a file')) }}

        <h1 class="mt-5 mb-4">Select</h1>

        {{ bs()->formGroup()->control(
                bs()->select('select', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'], 'P')) }}

        {{ bs()->formGroup()->control(
                bs()->select('select_ro', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'], 'P')->disabled()) }}


    </div>
@endsection
