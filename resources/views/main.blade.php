<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PHP Tester</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    @include('styles')

</head>
<body>
    @include('header')
    @include('codepad')
    @include('footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>