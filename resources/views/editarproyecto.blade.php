@extends('master')
@section('encabezado')
   <div class="row">
    <div class="col-xs-12 text-center well">
      <h1>Editar de Proyecto</h1>
      <img src="{{asset("img/gato.gif")}}"> 
    </div>
    </div>
@stop
@section('contenido')
    <div class="container">
    <div class="row">
    	<div class="col-xs-12">
    	<form action="{{url('/actualizarproyecto')}}/{{$proyectos->id}}" method="POST">
    			<input type="hidden" name="_token" value="{{csrf_token()}}">

    		<div class="form-group">
             <label for="descripcion" >Descripcion:</label>
             <input value="{{$proyectos->descripcion}}"type="text"class="form-control" name="descripcion">
    		</div>

    		<div class="form-group">
             <label for="id_cliente">id cliente:</label>
             <input value="{{$proyectos->id_cliente}}" type="numeric"class="form-control" name="id_cliente">
    		</div>

    		<input type="submit" class="btn btn-primary">
    		<a href="{{url('/consultarproyectos')}}" class="btn btn-danger">Cancelar</a>
        </form>
    	</div>
    </div>
 </div>
@stop