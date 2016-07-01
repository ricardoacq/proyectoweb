<!DOCTYPE html>
 <html lan="en">
  <head>
    <meta charset="UTF-8">
    <title>Consulta de Usuarios</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  </head>
  <body>
   <div class="container">
	<div class="row">
     <div class="col-xs-12 text-center well">
            <h1>Lista de usuarios</h1>
            <img src="{{asset("img/gato.gif")}}"> 
            <!--asset es necesario para las imagenes fijas ¡-->
     </div>
     <a href="{{url('registrarusuario')}}" class="btn btn-success">Nuevo Usuario
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
     <div class="row">
      <div class="col-xs-12">
       <table class="table table-hover">
         <thead>
         	<tr>
         		<th>ID</th>
         		<th>Nombre</th>
         		<th>Edad</th>
         		<th>Correo</th>
         		<th>Eliminar</th>
         	</tr>
         </thead>
         <tbody>
         	@foreach($usuarios as $u)
         	<tr>
         		<td>{{$u->id}}</td>
         		<td>{{$u->nombre}}</td>
         		<td>{{$u->edad}}</td>
         		<td>{{$u->correo}}</td>
         		<td>
              
            <a  class="btn btn-danger btn-xs" href="{{url('eliminarusuario')}}/{{$u->id}}">
         			<span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
         		</a>

            <a  class="btn btn-primary btn-xs" href="{{url('editarusuario')}}/{{$u->id}}">
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