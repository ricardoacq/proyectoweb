<!DOCTYPE html>
<html lan="en">
<head>
	<title>Registrar nuevo proyecto</title>
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
      <h1>Registar nuevo proyecto</h1>

    </div>
    </div>
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
</body>
</html>