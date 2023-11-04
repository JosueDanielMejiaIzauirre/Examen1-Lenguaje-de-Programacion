<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class contactoController extends Controller
{
    //
    public function agregar(){
        $contacto = contacto::all();
        return view("agregarcontacto");
    }
}
