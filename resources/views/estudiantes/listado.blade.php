@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <a class="btn btn-success" href="/estudiantes/registrar">Adicionar</a>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($estudiantes as $p)
            <tr>
                <th scope="row">{{$i}}</th>
                <td> {{ $p->codEstudiante}}</td>
                <td> {{ $p->nomestudiante}}</td>

                <td>
                    <a class="btn btn-primary">Editar</a>
                    <a class="btn btn-danger" href="{{route('eliminaEst',$p->codEstudiante)}}">Eliminar</a>
                </td>
            </tr>
            @php
                $i = $i +1
            @endphp
            @endforeach
        </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
