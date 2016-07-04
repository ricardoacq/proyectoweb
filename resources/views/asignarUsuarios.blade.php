@extends('master')
@section('encabezado')


        <h1>Asignar Usuarios</h1>
              <!--asset es necesario para las imagenes fijas ¡-->

@stop
@section('contenido')
  	
         <form action="{{url('/seleccionarUsuarios')}}" method='POST'>
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

             <table class="table table-hover">
                <thead>
                  <tr>
                    <tH>#</tH>
                    <tH>Descripcion</tH>
                    <tH>PDF</tH>
                  </tr>
                  <tbody>
                  @foreach($proyectos as $p)
                  <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->descripcion}}</td>
                    <td><a href="{{url('/PDFproyectos')}}/{{$p->id}}">
                     <span class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
                  
                  </tr>
                  @endforeach
                 </tbody>
             </thead>
             </table>
    @stop