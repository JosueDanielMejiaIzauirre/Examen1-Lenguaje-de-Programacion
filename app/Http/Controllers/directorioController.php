<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class directorioController extends Controller
{
    //
    public function index(){
        $directorio = Directorio::all();
        return view("directorio", compact("directorio"));
    }

    public function create(){
        return view('crearEntrada');
    }

    public function store(Request $request){
        $nuevodirectorio = new Directorio();
        $nvadirectorio->codigoEntrada = $request->input('codigo');
        $nvadirectorio->nombre = $request->input('nombre');
        $nvadirectorio->apellido = $request->input('apellido');
        $nvadirectorio->telefono = $request->input('telefono');
        $nvadirectorio->correo  = $request->input('correo');
        
        $nvadirectorio->save();
        
    }

    public function buscar($correo){
        return view('buscar');
    }

    public function ver(){
        return view('vercontactos');
    }

    public function eliminar(){
        return view('eliminar');
    }
}

