@extends('master')
@section('encabezado')
        <h1>Asignar Requisitos</h1>
@stop
@section('contenido')
         
         <form action="{{url('/registrarrequisito')}}" method='POST'>
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
        
@stop