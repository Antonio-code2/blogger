@extends('adminlte::page')

{{-- title  --}}
@section('title', 'Dashboard')

{{-- header --}}
@section('content_header')
    <h1>mostrar detalle de categoria</h1>
@stop


{{-- contenido --}}
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop



{{-- agregar algunos estilos adicionales  --}}
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


{{-- agregar script adicionales  --}}
@section('js')
    <script> console.log('Hi!'); </script>
@stop