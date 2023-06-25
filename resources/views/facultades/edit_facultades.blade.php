@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Facultad</h1>
    <form action= "{{ route('facultades.actualizar', $facultad->codFacultad) }}" method= "POST" >
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="codFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codFacultad" name="codFacultad" placeholder="Ingrese el código"
            value="{{ isset($facultad->codFacultad)?$facultad->codFacultad:''}}">
        </div>

        <div class="mb-3">
            <label for="nomFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nomFacultad" name="nomFacultad" placeholder="Ingrese el nombre"
            value="{{ isset($facultad->nomFacultad)?$facultad->nomFacultad:''}}">
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