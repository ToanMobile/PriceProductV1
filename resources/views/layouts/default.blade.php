<!doctype html>
<html lang="en">
    <head>
        <title>App Name - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/layout.css" rel="stylesheet">
        @yield('style')
    </head>
    <body>
        @include('layouts.header')

        @yield('content')

        @section('layouts.footer')
        @show

        <script src="js/jquery.min.js"></script>
        @yield('js')
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
