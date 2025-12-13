<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Tester</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('header')
    @include('codepad')
    @include('footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>