<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403 - Acceso no autorizado</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .error-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .error-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .error-heading {
            font-size: 3em;
            color: #333;
        }

        .error-message {
            font-size: 1.2em;
            color: #555;
            margin-top: 20px;
        }

        .error-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4285f4;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .error-link:hover {
            background-color: #3367d6;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-content">
            <h1 class="error-heading">Error 403</h1>
            <p class="error-message">Lo sentimos, no tienes permisos para acceder a esta página.</p>
            <a href="{{ route('show.cache') }}" class="error-link">Volver a la página de inicio</a>
        </div>
    </div>
</body>
</html>
