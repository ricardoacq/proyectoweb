@extends('master')
@section('encabezado')
        <h1>Asignar Requisitos</h1>
@stop
@section('contenido')
         
         <form action="{{url('/seleccionarrequisitos')}}" method='POST'>
          <input type="hidden" name="_token" value="{{csrf_token()}}">

           <div class="form-group">
            <label for="">Proyectos</label>
            <select class="form-control" name="proyectos" id="">
             @foreach($proyectos as $p)
              <option value="{{$p->id}}">
                {{$p->descripcion}}</option>
                 @endforeach
            </select>
            <input class="btn btn-primary" type="submit" value="asignar requisitos">
          </div> 
          

         </form>
        <table class="table table-hover">
                <thead>
                  <tr>
                    <tH>#</tH>
                    <tH>Descripcion</tH>
                    <tH>Prioridad</tH>
                    <tH>Horas</tH>
                  </tr>
                  <tbody>
                  @foreach($requisitos as $r)
                  <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->descripcion}}</td>
                    <td>{{$r->prioridad}}</td>
                    <td>{{$r->horas}}</td>
                      <td><a  class="btn btn-danger btn-xs" href="{{url('/eliminarreq')}}/{{$r->id}}">
                  <span class="glyphicon glyphicon-remove" aria-hidden="true">Eliminar</span>
                </a>

                <a  class="btn btn-primary btn-xs" href="{{url('/editarreq')}}/{{$r->id}}">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true">Editar</span>
                </a>
              </td>
                  </tr>
                  @endforeach
                 </tbody>              
             </thead>
             <tr>      
         <form action="{{url('/registrarrequisito')}}" method='POST'>
          <input type="hidden" name="_token" value="{{csrf_token()}}">

           <div class="form-group text-center">
            <input class="btn btn-success" type="submit" value="Agregar nuevo">
          </div> 
         </form></tr>
             </table>
@stop