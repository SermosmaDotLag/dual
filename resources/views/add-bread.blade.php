@extends('headerAdd')
@push('styles')
    form{
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
@endpush
@section('content')
    <form action="{{ route('save.bread')}}" method="post">
        @csrf
        <!-- Campos del formulario -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>

        <label for="celiac">Celiaco:<input type="text" name="celiac" required></label>
        <button type="submit">Guardar</button>
    </form>
@endsection