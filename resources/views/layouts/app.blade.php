<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

</style>

<body>
    <ul>
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
    </ul>
    <div>
        @yield('content')
    </div>
</body>

</html>
