@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Profesores</h1>
    <form action= "{{url('profesores/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoProfesor" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoProfesor" name="codigoProfesor" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombreProfesor" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombreProfesor" name="nombreProfesor" placeholder="Ingrese el nombre">
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
