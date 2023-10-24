<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Models\FormExpediente;
use App\Models\FormularioExpediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormularioExpedienteController extends Controller
{
    public function mostrarFormulario()
    {
        $formularios = FormularioExpediente::all(); // Retrieve all records from the "formulario_expedientes" table
        return view('formularios.formularioExpediente')->with('formularios', $formularios);
    }

    public function guardarFormulario(Request $request)
    {
        $formulario = new FormularioExpediente();

        $formulario->imagenInputs = $request->file('imagenInput')->store('imagenes');
        $formulario->nombre = $request->input('nombre');
        $formulario->apellido_paterno = $request->input('apellido_paterno');
        $formulario->apellido_materno = $request->input('apellido_materno');
        $formulario->lugar_de_nacimiento = $request->input('lugar_de_nacimiento');
        $formulario->fecha_de_nacimiento = $request->input('fecha_de_nacimiento');
        $formulario->nacionalidad = $request->input('nacionalidad');
        $formulario->cedula_de_identidad = $request->input('cedula_de_identidad');
        $formulario->profesion = $request->input('profesion');
        $formulario->whatsApp = $request->input('whatsApp');
        $formulario->email = $request->input('email');
        $formulario->laboral = $request->input('laboral');
        $formulario->licencias1 = $request->input('licencias1');
        $formulario->habilitaciones1 = $request->input('habilitaciones1');
        $formulario->fecha1 = $request->input('fecha1');
        $formulario->licencias2 = $request->input('licencias2');
        $formulario->habilitaciones2 = $request->input('habilitaciones2');
        $formulario->fecha2 = $request->input('fecha2');
        $formulario->licencias3 = $request->input('licencias3');
        $formulario->habilitaciones3 = $request->input('habilitaciones3');
        $formulario->fecha3 = $request->input('fecha3');
        $formulario->instruccion1 = $request->input('instruccion1');
        $formulario->universidad1 = $request->input('universidad1');
        $formulario->instruccion2 = $request->input('instruccion2');
        $formulario->universidad2 = $request->input('universidad2');
        $formulario->instruccion3 = $request->input('instruccion3');
        $formulario->universidad3 = $request->input('universidad3');
        $formulario->cargos1 = $request->input('cargos1');
        $formulario->institucion1 = $request->input('institucion1');
        $formulario->ffinicial1 = $request->input('ffinicial1');
        $formulario->ffinal1 = $request->input('ffinal1');
        $formulario->cargos2 = $request->input('cargos2');
        $formulario->institucion2 = $request->input('institucion2');
        $formulario->ffinicial2 = $request->input('ffinicial2');
        $formulario->ffinal2 = $request->input('ffinal2');
        $formulario->cargos3 = $request->input('cargos3');
        $formulario->institucion3 = $request->input('institucion3');
        $formulario->ffinicial3 = $request->input('ffinicial3');
        $formulario->ffinal3 = $request->input('ffinal3');
        $formulario->reuniones1 = $request->input('reuniones1');
        $formulario->lugar1 = $request->input('lugar1');
        $formulario->reuniones2 = $request->input('reuniones2');
        $formulario->lugar2 = $request->input('lugar2');
        $formulario->reuniones3 = $request->input('reuniones3');
        $formulario->lugar3 = $request->input('lugar3');
        $formulario->reentrenamiento1 = $request->input('reentrenamiento1');
        $formulario->fecha_reentrenamiento1 = $request->input('fecha_reentrenamiento1');
        $formulario->reentrenamiento2 = $request->input('reentrenamiento2');
        $formulario->fecha_reentrenamiento2 = $request->input('fecha_reentrenamiento2');
        $formulario->reentrenamiento3 = $request->input('reentrenamiento3');
        $formulario->fecha_reentrenamiento3 = $request->input('fecha_reentrenamiento3');
        $formulario->recurrentes1 = $request->input('recurrentes1');
        $formulario->fecha_recurrentes1 = $request->input('fecha_recurrentes1');
        $formulario->recurrentes2 = $request->input('recurrentes2');
        $formulario->fecha_recurrentes2 = $request->input('fecha_recurrentes2');
        $formulario->recurrentes3 = $request->input('recurrentes3');
        $formulario->fecha_recurrentes3 = $request->input('fecha_recurrentes3');
        $formulario->save();

        $notification = 'El registro se ha creado correctamente.';
        return redirect()->route('formularios.formulario-exito')->with(compact('notification'));
    }
    
}
