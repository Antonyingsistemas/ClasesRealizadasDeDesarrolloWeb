<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    //controladores
    public function mostrarUsuarios(){
        $personas = Persona::all();

        return view('persona', compact('personas'));//la vista persona esta recibiendo toda la informacion de personas
    }
}
