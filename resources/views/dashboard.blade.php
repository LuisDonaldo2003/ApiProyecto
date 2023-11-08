@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenido al Inicio.</p>

    <!-- Botón para ir a la página de creación -->
    <a href="{{ route('registrations.create') }}" class="btn btn-primary btn-lg">Crear Inscripción</a>

    <!-- Botón para ir al CRUD (registrations.index) -->
    <a href="{{ route('registrations.index') }}" class="btn btn-success btn-lg">Ver Inscripciones</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
