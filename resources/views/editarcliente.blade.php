@extends('master')
@section('encabezado')
   <div class="row">
    <div class="col-xs-12 text-center well">
      <h1>Editar de cliente</h1>
      <img src="{{asset("img/gato.gif")}}"> 
    </div>
    </div>
@stop
@section('contenido')
    <div class="container">
    <div class="row">
    	<div class="col-xs-12 ">
    	<form action="{{url('actualizarcliente')}}/{{$clientes->id}}" method="POST">
    			<input type="hidden" name="_token" value="{{csrf_token()}}">

    		<div class="form-group">
             <label for="nombre" >Nombre:</label>
             <input value="{{$clientes->nombre}}"type="text"class="form-control" name="nombre">
    		</div>

    		<div class="form-group">
             <label for="telefono">Telefono:</label>
             <input value="{{$clientes->telefono}}" type="numeric"class="form-control" name="telefono">
    		</div>

    		<div class="form-group">
             <label for="correo">Correo:</label>
             <input value="{{$clientes->correo}}" type="text"class="form-control" name="correo">
    		</div>
    		<input type="submit" class="btn btn-primary">
    		<a href="{{url('/consultarclientes')}}" class="btn btn-danger">Cancelar</a>
        </form>
    	</div>
    </div>
 </div>
@stop