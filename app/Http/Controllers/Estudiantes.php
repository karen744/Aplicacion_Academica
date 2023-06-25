<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.listado', 
        ['estudiantes' =>$estudiantes]);
    }

    public function form_registro(){
        return view('estudiantes.form_registro');
    }

    public function registrar(Request $r){
        $estudiante = new Estudiante();
        $estudiante->codEstudiante = $r->input('codigoEstudiante');
        $estudiante->nomestudiante = $r->input('nombreEstudiante');
        $estudiante->save();
        return redirect()->route('listadoEst');
    }

    public function eliminar($codEstudiante){
        $estudiante = Estudiante::findOrFail($codEstudiante);
        $estudiante->delete();
        return redirect()->route('listadoEst');
    }
}
