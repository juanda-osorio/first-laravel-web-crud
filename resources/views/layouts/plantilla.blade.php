<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/e5a3eae665.js"></script>
    <style>
        @yield('css');
    </style>
    <title> @yield('title') </title>
</head>
<body class="container mt-3">
    <header>
        @include('layouts.partials.nav')
    </header>
    @yield('content')
</body>
<script src="{{asset('js/app.js')}}"></script>
<script>@yield('js')</script>
</html>