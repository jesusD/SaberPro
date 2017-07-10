<?php

namespace SaberPro;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    /*
    * Obtiene el archivo al cual pertenece la pregunta
    */
    public function archivo(){
        return $this->belongsTo('Archivo');
    }

}
