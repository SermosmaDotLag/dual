<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('styles')
        <title>@yield('title')</title>
    </head>
    <body>
    <header style="background-color: #4CAF50; padding: 20px; color: white; text-align: center;">
    <h1>Panadería delicioso</h1>
    <p>Explora nuestra deliciosa variedad de panes</p>
    </header>
        @yield('header')

        @yield('content')
        <footer style="background-color: #333; color: white; text-align: center; padding: 10px;">
        <p>&copy; {{ date('Y') }} Panadería delicioso. Todos los derechos reservados.</p>
        </footer>
    </body>
</html>