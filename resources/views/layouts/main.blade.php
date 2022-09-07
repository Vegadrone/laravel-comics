<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>DC Comics | @yield('title')</title>
</head>
<body>
    @include('includes.header')
    <main>
        @yield('main-content')
    </main>
    @include('includes.footer')
</body>
</html>
