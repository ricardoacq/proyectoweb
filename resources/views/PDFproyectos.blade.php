<!DOCTYPE html>
 <html lan="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de usuarios en proyectos</title>
</head>
<body>
	<h1>Listados de usuarios</h1>
	<h2>Proyecto: {{$proyecto->descripcion}}</h2>
	<hr>
	@if($usuarios!=null)
	<table>
		<tr>
			<td>Nombre</td>
			<td>Edad</td>
		</tr>
		
	@foreach($usuarios as $u)
		<tr>
			<td>{{$u->nombre}}</td>
			<td>{{$u->edad}}</td>
		</tr>
	@endforeach
	</table>
	@else
	<h2>No hay Usuarios Asignados al Proyecto</h2>
	@endif
</body>
</html>