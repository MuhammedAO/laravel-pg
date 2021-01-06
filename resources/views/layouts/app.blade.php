<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title', 'Laravel pg')</title>
</head>

<body>
    <div class="container">
        @include('layouts.nav')

        @if (session()->has('message'))
            <div class="alert alert-success">
             <strong>Success!</strong> {{ session()->get('message') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>

</html>
