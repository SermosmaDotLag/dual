@extends('templates.consume')

@section('title', 'Tabla de datos')

@section('consume.header')
    <h1>Tabla de Consumo</h1>
@endsection

@push('consume.styles')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}">
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>    
    <script>
        $(document).ready(function() {
            $('#testDataTable').DataTable()
        })
    </script>
@endpush