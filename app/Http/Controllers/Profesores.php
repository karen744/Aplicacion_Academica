<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Profesor;

class Profesores extends Controller
{
    //
    public function index(){
        $profesors = DB::table('profesors')->get();
        return view('profesores.listado', 
        ['profesors' =>$profesors]);
    }
    public function form_registro(){
        return view('profesores.form_registro');
    }

    public function registrar(Request $r){
        $profesor = new Profesor();
        $profesor->codProfesor = $r->input('codigoProfesor');
        $profesor->nomProfesor = $r->input('nombreProfesor');
        $profesor->save();
        return redirect()->route('listadoProf');
    }

    public function eliminar($codProfesor){
        $profesor = Profesor::findOrFail($codProfesor);
        $profesor->delete();
        return redirect()->route('listadoProf');
    }
 
}
