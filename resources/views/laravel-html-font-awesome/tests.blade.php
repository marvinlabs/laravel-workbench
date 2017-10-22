@extends('layouts.basic')

@push('head.styles')
    {!! fa()->css() !!}

    <style>
        table td {
            border: 1px solid #aaa;
            padding: 5px 10px;
        }
    </style>
@endpush

@section('page.title', 'Laravel HTML Font Awesome')

@section('page.body')

    <h1>Simple icons</h1>

    <table>
        <tr>
            <td><code>fa()->icon('beer')</code></td>
            <td>{!! fa()->icon('beer') !!}</td>
        </tr>
        <tr>
            <td><code>fa()->beer()</code></td>
            <td>{!! fa()->beer() !!}</td>
        </tr>
        <tr>
            <td><code>fa()->icon('window-close')</code></td>
            <td>{!! fa()->icon('window-close') !!}</td>
        </tr>
        <tr>
            <td><code>fa()->windowClose()</code></td>
            <td>{!! fa()->windowClose() !!}</td>
        </tr>
    </table>

    <h1>Modifiers</h1>

    <table>
        <tr>
            <td><code>fa()->icon('repeat')->spin()->size('3x')</code></td>
            <td>{!! fa()->icon('repeat')->spin()->size('3x') !!}</td>
        </tr>
    </table>

    <h1>Lists</h1>

    <table>
        <tr>
            <td>
                <code>
                &lt;ul class="fa-ul"&gt;<br>
                    &lt;li&gt;@{!! fa()->checkSquareO()->forList() !!} Item 1&lt;/li&gt;<br>
                    &lt;li&gt;@{!! fa()->squareO()->forList() !!} Item 2&lt;/li&gt;<br>
                    &lt;li&gt;@{!! fa()->checkSquareO()->forList() !!} Item 3&lt;/li&gt;<br>
                    &lt;li&gt;@{!! fa()->checkSquareO()->forList() !!} Item 4&lt;/li&gt;<br>
                &lt;/ul&gt;
                </code>
            </td>
            <td>
                <ul class="fa-ul">
                    <li>{!! fa()->checkSquareO()->forList() !!} Item 1</li>
                    <li>{!! fa()->squareO()->forList() !!} Item 2</li>
                    <li>{!! fa()->checkSquareO()->forList() !!} Item 3</li>
                    <li>{!! fa()->checkSquareO()->forList() !!} Item 4</li>
                </ul>
            </td>
        </tr>
    </table>

    <h1>Stacks</h1>

    <table>
        <tr>
            <td><code> fa()->stack([ 'square-o', 'beer', ])</code></td>
            <td>{!! fa()->stack([ 'square-o', 'beer', ]) !!}</td>
        </tr>
        <tr>
            <td><code>fa()->stack([ 'square', 'beer' => 'fa-inverse', ])</code></td>
            <td>{!! fa()->stack([ 'square', 'beer' => 'fa-inverse', ]) !!}</td>
        </tr>
        <tr>
            <td><code>fa()->stack([ 'square', fa()->icon('beer')->inverse()->flip(), ])</code></td>
            <td>{!! fa()->stack([ 'square', fa()->icon('beer')->inverse()->flip(), ]) !!}</td>
        </tr>
        <tr>
            <td><code>fa()->stack([ 'square-o', 'beer', ])->addClass('fa-2x')</code></td>
            <td>{!! fa()->stack([ 'square-o', 'beer', ])->addClass('fa-2x') !!}</td>
        </tr>
    </table>

    <h1>Utilities</h1>

    <table>
        <tr>
            <td><code>fa()->css()</code></td>
            <td><code>&lt;link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
                      rel="stylesheet"&gt;</code></td>
        </tr>
    </table>


@endsection