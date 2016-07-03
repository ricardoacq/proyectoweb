<!DOCTYPE html>
 <html lan="en">
    <head>
      <meta charset="UTF-8">
      <title>Asignar de Usuarios</title>
      <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
      <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
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
  	<div class="row">
       <div class="col-xs-12 text-center well">
              <h1>Asignar Usuarios a Proyectos</h1>
              <img src="{{asset("img/gato.gif")}}"> 
              <!--asset es necesario para las imagenes fijas ¡-->
       </div>
      </div>
       <div class="row">
        <div class="col-xs-12 well">
         <form action="{{url('/seleccionarUsuarios')}}" method='POST'>
          <input type="hidden" name="_token" value="{{csrf_token()}}">

           <div class="form-group">
            <label for="">Proyectos</label>
            <select class="form-control" name="proyectos" id="">
             @foreach($proyectos as $p)
              <option value="{{$p->id}}">
                {{$p->descripcion}}</option>
                 @endforeach
            </select>
            <input class="btn btn-primary" type="submit" value="Mostrar">
          </div> 
          

         </form>

         </div>
         <div class="col-xs-12 ">
             <table class="table table-hover">
                <thead>
                  <tr>
                    <tH>#</tH>
                    <tH>Descripcion</tH>
                    <tH>PDF</tH>
                  </tr>
                  <tbody>
                  @foreach($proyectos as $p)
                  <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->descripcion}}</td>
                    <td><a href="{{url('/PDFproyectos')}}/{{$p->id}}">
                     <span class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
                  
                  </tr>
                  @endforeach
                 </tbody>
             </thead>
             </table>
         </div>
       </div>
     </div>
    </body>
</html>