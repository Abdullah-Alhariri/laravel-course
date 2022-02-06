<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','unknown page')</title>
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
        {{-- asset() will redirect to the public folder --}}
    </head>
    <body>
        {{-- Start Navitgation Bar --}}
        @include('layout.navbar')
        {{-- End Navitgation Bar --}}

        @yield('content')

        @include('layout.sidebar')
        {{-- here you are defining and yielding at the same time! --}}

    </body>
</html>
