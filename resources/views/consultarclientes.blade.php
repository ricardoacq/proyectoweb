@extends('master')
@section('encabezado')
	<div class="row">
     <div class="col-xs-12 text-center well">
            <h1>Seccion clientes</h1>
      
            <!--asset es necesario para las imagenes fijas ¡-->
     </div>
@stop
@section('contenido')
     <div class="col-xs-12 ">
     <a href="{{url('/registrarcliente')}}" class="btn btn-success">Nuevo cliente
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
    </div>
    </div>
    <div class="container">
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
@stop   