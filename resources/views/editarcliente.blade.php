<!DOCTYPE html>
<html lan="en">
<head>
	<title>Editar cliente</title>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
</head>
<body>
<div class="container">
   <div class="row">
    <header>  
    <nav>
      <ul> 
        <li><a href="{{asset('/')}}">Home</a></li>
        <li><a href="{{asset('/asignarusuarios')}}">Asignar usuarios</a></li>
        <li><a href="{{asset('/usuarios')}}">Consulta Usuarios</a></li>
        <li><a href="{{asset('/consultarclientes')}}">Consultar Clientes</a></li>
        <li><a href="{{asset('/consultarproyectos')}}">Consultar Proyectos</a></li>
      </ul>
    </nav>
  </header>
  </div>
   <div class="row">
    <div class="col-xs-12 text-center">
      <h1>Editar de cliente</h1>

    </div>
    </div>
    <div class="row">
    	<div class="col-xs-12">
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
</body>
</html>