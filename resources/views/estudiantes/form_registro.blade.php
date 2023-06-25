@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro Estudiantes</h1>
    <form action= "{{url('estudiantes/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoEstudiante" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" placeholder="Ingrese el código">
        </div>

        <div class="mb-3">
            <label for="nombreEstudiante" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Ingrese el nombre">
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
