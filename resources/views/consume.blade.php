<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Vista con DataTables</title>

    <!-- Incluye los estilos de DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Consumo Eléctrico</h1>


        <div class="mt-5">
            <canvas id="barChart" width="400" height="200"></canvas>
            <canvas id="lineChart" width="400" height="200"></canvas>
        </div>
    </div>

    
    </main>   
    <!-- <script type="text/javascript" charset="utf8" src="{{ asset('chart.js/dist/chart.js') }}"></script>-->       

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>
    
    <script>
        $(document).ready(function() {
            $('#testDataTable').DataTable()
        })
    </script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/testChart.js') }}"></script>
</body>
</html>
