@extends('templates.app')

@section('title', 'Crud de Panes')

@section('header')
    <button class ="initialButtons"><a href="{{ route('index.index') }}">Volver al Inicio</a></button>
    <button><a href="{{ route('add.bread') }}">Añadir Nuevo Pan</a></button>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
@endsection