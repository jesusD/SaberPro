@extends('layouts.main')
@section('title','Administrador')
@section('menu')
    @include('admin.partials.menu')
@endsection
@section('content')
    

   
     
              <div class="col-md-3"></div>
              <div class=" col-md-6 cargar-archivo marco">
                  <div class="titulo">
                    <h3 class="h3">Cargar Archivo</h3>
                  </div>
                    <form class="esp_A">
                       <div class="form-group">
                           <label  for="pwd" ><h6>Nombre del archivo:</h6></label>
                           <input type="text" class="form-control" ng-model="nombre" size="20" placeholder="Nombre del archivo" required>
                        </div>
                        <div class="form-group">
                            <label for="" ><h6>Archivo a cargar:</h6></label>
                            <input type="file" class="form-control-file">
                        </div>
                        <div class="form_group">
                            <label for=""><h6>Descripción de derechos de autor:</h6></label>
                            <textarea class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class=""><h6 class="h6">Año:</h6></label>
                                <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class=""><h6>Periodo:</h6></label>
                            <select class="custom-select">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><h6>Competencia:</h6></label>
                            <select  class="form-control" id="exampleSelect2">
                                 <option>Seleccionar</option>
                                 <option>Razonamiento cuantitativo</option>
                                 <option>Ingles</option>
                                 <option>Lectura critica</option>
                                 <option>Competencias ciudadanas</option>

                            </select>
                        </div>
                        <fieldset class="form-control">
                            <legend><h6 class="h6">Marcar las respuestas correctas</h6></legend>
                            
                        </fieldset>
                        <div class="col-md-4 offset-md-4 esp_A">
                            <button type="submit" class="btn btn-danger">Registrar</button>
                        </div>
                    </form>
              </div>
               <div class="col-md-3"></div>
        
@endsection