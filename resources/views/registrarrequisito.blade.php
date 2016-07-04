@extends('master')
@section('encabezado')
   <div class="row">
    <div class="col-xs-12 text-center well">
      <h1>Registrar Nuevo requisito</h1>
    </div>
    </div>
@stop
@section('contenido')
    <div class="container">
    <div class="row">
    	<div class="col-xs-12">
    	<form action="">
    		<input type="hidden" name="_token" value="{{csrf_token()}}">

             <div class="form-group">
             <label for="id" >proyecto </label>
             <input value="{{$id}}"type="text" name="id" class="form-control"  disabled>
             </div> 
    		<div class="form-group">
             <label for="descripcion" >Descripcion:</label>
             <input type="text"class="form-control" name="descripcion">
    		</div>
            <div class="form-group">
             <label for="prioridad" >Prioridad:</label>
             <input type="numeric"class="form-control" name="prioridad">
            </div>
            <div class="form-group">
             <label for="horas" >Horas:</label>
             <input type="numeric"class="form-control" name="horas">
            </div>

    		<input type="submit" class="btn btn-primary" value="agregar">
    		<a href="{{url('/requisitos')}}" class="btn btn-danger">Cancelar</a>
        </form>
    	</div>
    </div>
 </div>
@stop