@extends('master')
@section('encabezado')
<div class="row">
    <div class="col-xs-12 text-center well">
      <h1>Seccion de Proyectos</h1>
      <img src="{{asset("img/gato.gif")}}"> 
    </div>
    </div>
@stop
@section('contenido')
     <a href="{{url('/registrarproyecto')}}" class="btn btn-success">Nuevo proyecto
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
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
              
            <a  class="btn btn-danger btn-xs" href="{{url('/eliminarproyecto')}}/{{$p->id}}">
         			<span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
         		</a>

            <a  class="btn btn-primary btn-xs" href="{{url('/editarproyecto')}}/{{$p->id}}">
              <span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span>
            </a>

         	   </td>
         	</tr>
         	@endforeach
         </tbody>
       </table>
@stop