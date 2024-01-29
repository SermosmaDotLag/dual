@extends('consume-header-datatable')
@section('consume.content')
    <div class="table-responsive">
            <table class="table table-bordered" id="testDataTable">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Mes</th>
                        <th>Consumo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consume as $consume)
                        <tr>
                            <td>{{ $consume->id }}</td>
                            <td>{{ $consume->date }}</td>
                            <td>{{ $consume->monthName }}</td>
                            <td>{{ $consume->consume }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection