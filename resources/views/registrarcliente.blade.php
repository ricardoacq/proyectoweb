<!DOCTYPE html>
<html lan="en">
<head>
	<title>Registra cliente</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
<div class="container">
   <div class="row">
    <div class="col-xs-12 text-center">
      <h1>Registro de clientes</h1>

    </div>
    </div>
    <div class="row">
    	<div class="col-xs-12">
    	<form action="{{url('/guardarcliente')}}" method="POST">
    			<input type="hidden" name="_token" value="{{csrf_token()}}">

    		<div class="form-group">
             <label for="nombre" >Nombre:</label>
             <input type="text"class="form-control" name="nombre">
    		</div>

    		<div class="form-group">
             <label for="telefono">Telefono:</label>
             <input type="numeric"class="form-control" name="telefono">
    		</div>

    		<div class="form-group">
             <label for="correo">Correo:</label>
             <input type="text"class="form-control" name="correo">
    		</div>
    		<input type="submit" class="btn btn-primary">
    		<a href="{{url('/consultarclientes')}}" class="btn btn-danger">Cancelar</a>
        </form>
    	</div>
    </div>
 </div>
</body>
</html>