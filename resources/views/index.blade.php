<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <style>
            body{
                background-color: lightgrey;
            }
            img{
                width: 10%;
            }
        </style>
    </head>
    <body>
        <a href="{{ route('show.bread') }}">Ver Panes</a>
        <a href="{{ route('show.cache') }}">Prueba Caché</a>
        <a href="{{ route('datatable.consume') }}">Prueba Tabla</a>
        <a href="{{ route('chart.consume') }}">Prueba Gráfico</a>
        <a href="{{ route('poke.view') }}">Consulta a API</a>
        <p>Esta imagen ha sido puesta usando el Helper Asset</p>
        <img src="{{ asset('assets/perro.png') }}" alt="Esta imagen ha sido generada con asset">
        <button><a href="{{ route('download.dog') }}">Descarga la imagen</a></button>
    </body>
</html>