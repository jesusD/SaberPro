@extends('layouts.main')
@section('title','Estudiante')
@section('menu')
    @include('estudiante.partials.menu')
@stop
@section('content')
<div class="container marco">
            <h2 class="text-center"></h2>
         <div class="row">
             <div class="col-md-6">
                 <div class="titulo">
                      <h4>Seleccionar modulo a presentar</h4>
                 </div>
                 
                  <div class="btn-group-vertical btn-sm modulos esp_A">
                      <button type="button" class="btn btn-danger">Lectura critica</button>
                      <button type="button" class="btn btn-danger">Razonamiento cuantitativo</button>
                      <button type="button" class="btn btn-danger">Ingles</button>
                      <button type="button" class="btn btn-danger">Competencias ciudadanas</button>
                  </div>
             </div>
             <div class="col-md-6  ">
                 <div class="titulo">
                     <h4 class="text-center">Puntaje ultima prueba</h4>
                 </div>
                
                <div class="row  esp_A">
                    <div class="resultado col-md-3">
                        <h6>Lectura critica</h6>
                        <h1 class="text-center">0.0</h1>
                    </div>
                    <div class="resultado col-md-3">
                         <h6>Lectura critica</h6>
                         <h1 class="text-center">0.0</h1>
                    </div>
                    <div class="resultado col-md-3">
                         <h6>Lectura critica</h6>
                         <h1 class="text-center">0.0</h1>
                    </div>
                    <div class="resultado col-md-3">
                         <h6>Lectura critica</h6>
                         <h1 class="text-center">0.0</h1>
                    </div>
                </div>
             </div>
         </div>
         
     </div>

@stop