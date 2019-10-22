<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc.navbar')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='/css/app.css'>
    <title>{{config('aap.name', 'SalesPortal')}}</title>


</head>
<body>

<div class="container">
    @include('inc.messages')
@yield('content')
</div>
</body>
</html>
