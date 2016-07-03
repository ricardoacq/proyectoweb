<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
        <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
           <div class="row">
    <header>  
    <nav>
      <ul> 
        <li><a href="{{asset('/')}}">Home</a></li>
        <li><a href="{{asset('/asignarusuarios')}}">Asignar usuarios</a></li>
        <li><a href="{{asset('/usuarios')}}">Consulta Usuarios</a></li>
        <li><a href="{{asset('/consultarclientes')}}">Consultar Clientes</a></li>
        <li><a href="{{asset('/consultarproyectos')}}">Consultar Proyectos</a></li>
      </ul>
    </nav>
  </header>
  </div>
            <div class="col-xs-12 wall">
                <div class="title">Laravel 5 Ruta principal</div>
            </div>
        </div>
    </body>
</html>
