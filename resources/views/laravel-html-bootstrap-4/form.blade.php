@extends('layouts.bs')

@section('page.title', 'Laravel HTML Bootstrap 4')

@section('page.body')
    <div class="container">
        <h1>Simple form</h1>

        {{ bs()->openForm('put', route('form-submit', [$category])) }}

        {{ bs()->formGroup(bs()->text('first_name', 'John'), 'First name', 'Help text provided directly') }}
        {{ bs()->formGroup(bs()->text('last_name', 'Doe')) }}
        {{ bs()->email('email')->placeholder( 'Your email address') }}
        {{ bs()->submit('Register') }}

        {{ bs()->closeForm() }}

        <h1>Another simple form</h1>

        {{ bs()->openForm('get', route('form-submit', [$category])) }}


        {{ bs()->closeForm() }}


        <h1>Inline form</h1>

        {{ bs()->openForm('get', route('form-submit', [$category]), ['inline' => true]) }}
        <label class="sr-only" for="inlineFormInputName2">Name</label>
        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" placeholder="Jane Doe">

        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
            <div class="input-group-addon">@</div>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
        </div>

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