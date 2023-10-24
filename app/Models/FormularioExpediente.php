<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioExpediente extends Model
{
    use HasFactory;
    protected $table = 'form_expedientes';
    protected $primaryKey = 'id';
    protected $fillable = [

        'imagenInputs',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'lugar_de_nacimiento',
        'fecha_de_nacimiento',
        'nacionalidad',
        'cedula_de_identidad',
        'profesion',
        'whatsApp',
        'email',
        'laboral',
        'licencias1',
        'habilitaciones1',
        'fecha1',
        'licencias2',
        'habilitaciones2',
        'fecha2',
        'licencias3',
        'habilitaciones3',
        'fecha3',
        'instruccion1',
        'universidad1',
        'instruccion2',
        'universidad2',
        'instruccion3',
        'universidad3',
        'cargos1',
        'institucion1',
        'ffinicial1',
        'ffinal1',
        'cargos2',
        'institucion2',
        'ffinicial2',
        'ffinal2',
        'cargos3',
        'institucion3',
        'ffinicial3',
        'ffinal3',
        'reuniones1',
        'lugar1',
        'reuniones2',
        'lugar2',
        'reuniones3',
        'lugar3',
        'reentrenamiento1',
        'fecha_reentrenamiento1',
        'reentrenamiento2',
        'fecha_reentrenamiento2',
        'reentrenamiento3',
        'fecha_reentrenamiento3',
        'recurrentes1',
        'fecha_recurrentes1',
        'recurrentes2',
        'fecha_recurrentes2',
        'recurrentes3',
        'fecha_recurrentes3'
    ]
    ;

}
