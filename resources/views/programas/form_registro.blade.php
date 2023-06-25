@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Programas</h1>
    <form action= "{{url('programas/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoPrograma" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoPrograma" name="codigoPrograma" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombrePrograma" class="form-label">Nombre del Programa</label>
            <input type="text" class="form-control" id="nombrePrograma" name="nombrePrograma" placeholder="Ingrese el nombre">
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>


@stop

@section('content')
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
