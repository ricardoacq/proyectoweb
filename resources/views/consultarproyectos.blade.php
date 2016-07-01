<!DOCTYPE html>
 <html lan="en">
  <head>
    <meta charset="UTF-8">
    <title>Consultar proyectos</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  </head>
  <body>
   <div class="container">
	<div class="row">
     <div class="col-xs-12 text-center well">
            <h1>Lista de proyectos</h1>
            <img src="{{asset("img/gato.gif")}}"> 
            <!--asset es necesario para las imagenes fijas ¡-->
     </div>
     <a href="" class="btn btn-success">Nuevo proyecto
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
     <div class="row">
      <div class="col-xs-12">
       <table class="table table-hover">
         <thead>
         	<tr>
         		<th>ID</th>
         		<th>Descripcion</th>
         		<th>ID Cliente</th>
         		<th>Eliminar</th>
         	</tr>
         </thead>
         <tbody>
         	@foreach($proyectos as $p)
         	<tr>
         		<td>{{$p->id}}</td>
         		<td>{{$p->descripcion}}</td>
         		<td>{{$p->id_cliente}}</td>
         		<td>
              
            <a  class="btn btn-danger btn-xs" href="">
         			<span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
         		</a>

            <a  class="btn btn-primary btn-xs" href="">
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