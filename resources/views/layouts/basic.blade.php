<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page.title', 'Laravel Workbench')</title>

    @stack('head.styles')
    @stack('head.scripts')
</head>
<body>
@yield('page.body')
@stack('foot.scripts')
</body>
</html>
