<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.listado', 
        ['facultades' =>$facultades]);
    }

    public function form_registro(){
        return view('facultades.form_registro');
    }

    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->codFacultad = $r->input('codigoFacultad');
        $facultad->nomFacultad = $r->input('nombreFacultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function eliminar($id){
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFac');
    }
 

    public function editar($id)
    {
        
        $facultad=Facultad::findOrFail($id);
        return view('facultades.edit_facultades',compact('facultad'));

    }


    public function actualizar(Request $request, $id)
    {
        
        $datos = request()->except('_token','_method');
        Facultad::where('codFacultad','=',$id)->update($datos);
        return redirect()->route('listadoFac');


    }
    
}
