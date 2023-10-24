<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\dbFormulario;
use App\Models\FormularioExpediente;

class dbFormularioController extends Controller
{
    public function mostrarDatos()
    {
        $formularios = FormularioExpediente::all(); // Recupera todos los registros de la tabla "formulario_expedientes"
        return view('formularios.dbFormulario')->with('formularios', $formularios);
    }
    
}
