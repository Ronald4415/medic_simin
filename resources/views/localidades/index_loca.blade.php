<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<title>Localidades</title>
</head>
<body>

	<center><h1>Pagina Principal Localidades</h1>
	<h2>Listado de Localidades</h2>
	<p><a href="{{route('adiloca')}}">Adicion Localidades</a></p>
	<table>
		<thead>
			<tr>
				<th>ID</th><th>Codigo Loc</th><th>Descripcion Localidad</th><th colspan="2">Opciones</th>
			</tr>

		</thead>
		<tbody>
			<tr>
				@forelse($locali as $localidad)
					<tr>
						<th>{{$localidad->id}}</th>
						<th>{{$localidad->id_localidad}}</th>
						<th>{{$localidad->descrip_loca}}</th>
						<th><a href="">Edicion</a></th>
						<th><a href="Eliminar">Eliminar</th>
					</tr>
				@empty
					<tr>
						<h2>No se encontraron Datos del Sistema</h2>
					</tr>
				@endforelse
			</tr>
		</tbody>
	</table>

	</center>
	
</body>
</html>