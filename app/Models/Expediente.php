<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    public function mostrarDatos()
    {
        $expedientes = Expediente::all();
        return view('formularios.dbFormulario', ['expedientes' => $expedientes]);
    }
}
