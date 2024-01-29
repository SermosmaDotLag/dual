<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        @stack('consume.styles')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        
    </head>
    <body>
        @yield('consume.header')
        @yield('consume.content')
    </body>
</html>