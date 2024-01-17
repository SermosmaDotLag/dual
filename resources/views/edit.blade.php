<!-- resources/views/pan/editar.blade.php -->

@extends('headerEdit')
@push('styles')
    form{
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
@endpush
@section('content')
    <form action="{{ route('update.bread', ['id' => $bread->id]) }}" method="post">
        @csrf
        @method('PUT')
        <!-- Campos del formulario prellenados con los datos actuales del pan -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ $bread->name }}" required>

        <label for="celiac">Celiaco:</label>
        <input type="text" name="celiac" value="{{ $bread->celiac }}" required>


        <button type="submit">Actualizar</button>
    </form>
@endsection