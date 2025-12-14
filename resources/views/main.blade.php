<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Tester</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa6mY5Y2vQ+KQmQb3QZr+KQ6Q1Zr6b1Zr6b1Zr6b1Zr6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/codepad.css') }}">
</head>
<body>
    @include('header')
    @include('codepad')
    @include('footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>