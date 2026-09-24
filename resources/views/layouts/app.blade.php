<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

@include('partials.navbar')

<div class="container mt-4">
    @yield('content')
</div>

@include('partials.footer')

<script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

