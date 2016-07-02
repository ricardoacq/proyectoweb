<!DOCTYPE html>
 <html lan="en">
  <head>
    <meta charset="UTF-8">
    <title>Consultar clientes</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  </head>
  <body>
   <div class="container">
	<div class="row">
     <div class="col-xs-12 text-center well">
            <h1>Lista de clientes</h1>
            <img src="{{asset("img/gato.gif")}}"> 
            <!--asset es necesario para las imagenes fijas ¡-->
     </div>
     <a href="{{url('/registrarcliente')}}" class="btn btn-success">Nuevo cliente
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
     <div class="row">
      <div class="col-xs-12">
       <table class="table table-hover">
         <thead>
         	<tr>
         		<th>ID</th>
         		<th>Nombre</th>
         		<th>Telefono</th>
         		<th>Correo</th>
         		<th>Eliminar</th>
         	</tr>
         </thead>
         <tbody>
         	@foreach($clientes as $c)
         	<tr>
         		<td>{{$c->id}}</td>
         		<td>{{$c->nombre}}</td>
         		<td>{{$c->telefono}}</td>
         		<td>{{$c->correo}}</td>
         		<td>
              
            <a  class="btn btn-danger btn-xs" href="{{url('/eliminarcliente')}}/{{$c->id}}">
         			<span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
         		</a>

            <a  class="btn btn-primary btn-xs" href="{{url('/editarcliente')}}/{{$c->id}}">
              <span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span>
            </a>

         	   </td>
         	</tr>
         	@endforeach
         </tbody>
       </table>
       </div>
     </div>
   </div>
  </body>
</html>