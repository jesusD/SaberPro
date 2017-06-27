@extends('layouts.main')
@section('title,Iniciar Sesión')
@section('content')
            <div class="col-md-3">
            </div>
            <div class="col-md-6 marco">
                <div class="titulo">
                     <h3 class="text-center">Iniciar sesión</h3>
                </div>
                
                <form >
                   <div class="form-group">
                     <label for="email" class="">Correo institucional</label>
                       <div class="">
                         <input type="email" class="form-control" id="inputEmail3" placeholder="ejemplo@ufps.edu.co">
                       </div>
                   </div>  
                   <div class="form-group ">
                       <div class="col-md-6 offset-md-3">
                           <button class="btn btn-danger btn-block" type="submit" >Entrar</button>
                       </div>
                   </div>                     
                </form>
            </div>
            <div class="col-md-3">
            </div>
@stop