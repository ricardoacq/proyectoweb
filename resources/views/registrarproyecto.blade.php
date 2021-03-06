@extends('master')
@section('encabezado')
   <div class="row">
    <div class="col-xs-12 text-center well">
      <h1>Registrar Nuevo Proyecto</h1>
    </div>
    </div>
@stop
@section('contenido')
    <div class="container">
    <div class="row">
    	<div class="col-xs-12">
    	<form action="{{url('/guardarproyecto')}}" method="POST">
    			<input type="hidden" name="_token" value="{{csrf_token()}}">

    		<div class="form-group">
             <label for="nombre" >Nombre:</label>
             <input type="text"class="form-control" name="nombre">
    		</div>

    		<div class="form-group">
             <label for="id_cliente">ID_cliente:</label>
             <input type="numeric"class="form-control" name="id_cliente">
    		</div>
    		<input type="submit" class="btn btn-primary">
    		<a href="{{url('/consultarproyectos')}}" class="btn btn-danger">Cancelar</a>
        </form>
    	</div>
    </div>
 </div>
@stop