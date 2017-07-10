<?php

namespace SaberPro;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{

    public function preguntas(){
        return $this->hasMany('Pregunta');
    }


}
