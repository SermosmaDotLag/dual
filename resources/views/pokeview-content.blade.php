@extends('pokeview-header')
@section('poke.content')
<a href="{{ route('api') }}">Actualizar</a>
    <div class="table-responsive">
            <table class="table table-bordered" id="testDataTable">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>URL</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($poke as $poke)
                        <tr>
                            <td>{{ $poke->id }}</td>
                            <td>{{ $poke->pokeName }}</td>
                            <td><a href="{{ $poke->url }}">url</a></td>
                            <td>{{ $poke->created_at }}</td>
                            <td>{{ $poke->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection