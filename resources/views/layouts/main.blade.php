<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title') </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
       
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/estilo.css') }}
     
    </head>
    <body>

    

    <div class="container-fluid">
        
        <div class="row header no-gutters">
            <div class="col-md-4 col-sm-3 col-xs-2 ">
                 <a href="" >
                 <img id="ufps" class="img-fluid rounded float-left"src="image/ufps2.png" alt="logo ufps">
                </a>
            </div>
                     <!-- Por si se pide el escudo   <div class="col-md-2 col-sm-2 col-xs-2">
                            <a ><img id="escudo" class=" img-responsive"  src="../Vista/img/escudo.png"
                                      xampp                            alt="Escudo de Colombia"></a>
                        </div>  -->
               <div class="col-md-5 col-sm-6 col-xs-8">
                   
               </div>         
              <div class=" col-md-3 col-sm-3 col-xs-2 pull-right ">
                <a ><img id="icfes" class=" img-fluid rounded float-right"  src="image/icfes.png"  alt="logo icfes"></a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row  ">  
           @yield('content')
        </div>
    </div>


        
        {{Html::script('js/jquery-3.1.1.slim.min.js')}}
        {{Html::script('js/tether.min.js')}}
        {{Html::script('js/bootstrap.min.js')}}
    </body>
</html>