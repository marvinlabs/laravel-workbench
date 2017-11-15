@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        <h1>Simple form</h1>

        {{ bs()->openForm('put', route('form-submit', [$category])) }}

        {{ bs()->formGroup(bs()->text('first_name', 'John'))
                ->label('First name')
                ->helpText('This is some help text') }}

        {{ bs()->formGroup()
                ->control(bs()->inputGroup()
                        ->suffixWith(fa()->icon('user'))
                        ->control(bs()->text('last_name', 'Doe')))
                ->label('Last name') }}

        {{ bs()->formGroup(bs()->email('email')->placeholder('Your email address'))
                ->label('Email') }}

        {{ bs()->submit('Register') }}

        {{ bs()->closeForm() }}

        <h1>Inline form</h1>

        {{ bs()->openForm('get', route('form-submit', [$category]), ['inline' => true]) }}

        {{ bs()->formGroup(bs()->text('first_name', 'John')->addClass('mb-2 mr-sm-2 mb-sm-0'))
                ->label('First name', true) }}

        {{ bs()->formGroup(bs()->inputGroup(bs()->text('username', 'johndoe')->addClass('mb-2 mr-sm-2 mb-sm-0'), '@'))
                ->label('Username', true) }}

        <div class="form-check mb-2 mr-sm-2 mb-sm-0">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        {{ bs()->closeForm() }}

        <h1>Control sizes</h1>

        {{ bs()->text('large', 'Large')->sizeLarge() }}
        {{ bs()->text('normal', 'Normal') }}
        {{ bs()->text('small', 'Small')->sizeSmall() }}

        <h1>Input groups</h1>

        {{ bs()->inputGroup(bs()->text('first_name', '20.00'), ['$', '0.00']) }}
        {{ bs()->inputGroup(bs()->text('first_name', '20'), '$', '0.00') }}

        <h1>Read only</h1>

        {{ bs()->text('readonly', 'Read only')->readOnly() }}
        {{ bs()->text('plaintext', 'Read only and show as plain text')->readOnly(true) }}

        <h1>Text areas</h1>

        {{ bs()->textarea('textarea', 'Lorem ipsum blah blah blah') }}
        {{ bs()->text('plaintext', 'Read only and show as plain text')->readOnly(true) }}
        {{ bs()->textarea('textarea_ro', 'This one is read only')->disabled() }}

        <h1>Files</h1>

        {{ bs()->file('textarea') }}

        <h1>Select</h1>

        {{ bs()->select('select', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'], 'P') }}
        {{ bs()->select('select_ro', ['FR' => 'France', 'S' => 'Sweden', 'P' => 'Portugal'], 'P')->disabled() }}


    </div>
@endsection