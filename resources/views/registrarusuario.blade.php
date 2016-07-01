<!DOCTYPE html>
<html lan="en">
<head>
	<title>Registra Usuario</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
<div class="container">
   <div class="row">
    <div class="col-xs-12 text-center">
      <h1>Registro de Usuarios</h1>

    </div>
    </div>
    <div class="row">
    	<div class="col-xs-12">
    	<form action="{{url('guardarusuario')}}" method="POST">
    			<input type="hidden" name="_token" value="{{csrf_token()}}">

    		<div class="form-group">
             <label for="nombre" >Nombre:</label>
             <input type="text"class="form-control" name="nombre">
    		</div>

    		<div class="form-group">
             <label for="edad">Edad:</label>
             <input type="numeric"class="form-control" name="edad">
    		</div>

    		<div class="form-group">
             <label for="correo">Correo:</label>
             <input type="text"class="form-control" name="correo">
    		</div>
    		<input type="submit" class="btn btn-primary">
    		<a href="{{url('usuarios')}}" class="btn btn-danger">Cancelar</a>
        </form>
    	</div>
    </div>
 </div>
</body>
</html>