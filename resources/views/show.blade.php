@extends('headerShow')
@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Fecha de Registro</th>
                <th>Fecha Modificado</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bread as $bread)
                <tr>
                    <td>{{ $bread->id }}</td>
                    <td>{{ $bread->name }}</td>
                    <td>{{ $bread->celiac }}</td>
                    <td>{{ $bread->created_at }}</td>
                    <td>{{ $bread->updated_at }}</td>
                    <td>
                        <form action="{{ route('delete.bread', $bread->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                    <td><form action=""><button><a href="{{ route('edit.bread', ['id' => $bread->id]) }}">Editar</a></button></form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection