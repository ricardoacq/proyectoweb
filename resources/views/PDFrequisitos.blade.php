<!DOCTYPE html>
 <html lan="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de requisitos en proyectos</title>
</head>
<body>
	<h1>Lista de requisitos</h1>
	<h2>Proyecto: {{$proyecto->descripcion}}</h2>
	<hr>
	@if($requisitos!=null)
	<table>
		<tr>
			<td>Descripcion</td>
			<td>Prioridad</td>
			<td>Horas</td>
		</tr>
		
	@foreach($requisitos as $r)
		<tr>
			<td>{{$r->descripcion}}</td>
			<td>{{$r->prioridad}}</td>
			<td>{{$r->horas}}</td>
		</tr>
	@endforeach
	</table>
	@else
	<h2>No hay Usuarios Asignados al Proyecto</h2>
	@endif
</body>
</html>