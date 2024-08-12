<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Principal Proveedores</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-color: #EDF0F2;">
	<center><h1>Pagina Principal Proveedores</h1>
		<h2>Listado de Proveedores</h2>
		<p><a href="{{route('prov_crea')}}">Crear nuevo Poveedor</a></p>
	
	<table align="center" border="3">
		<thead align="center">
			<tr style="background-color: #BCC0D3">
				<th>ID</th><th>Nit</th><th>Nombre Prov</th><th>Direccion Prov</th><th>Representante</th><th>Opciones</th>
			</tr>
		</thead>
		<tbody align="center">
			@forelse ($prov as $reg)
				<tr>
					<th>{{$reg->id}}</th><th>{{$reg->nit_proveed}}</th><th>{{$reg->nom_provee}}</th><th>{{$reg->direccion_prov}}</th><th>{{$reg->repre_pro}}</th>
					<th><a href="{{route('modifiprov')}}">Modificar</th>
					<th><a href="{{route('borraprov')}}">Eliminar</a></th>

				</tr>
			@empty
			<tr>
				<th align="center">A T E N C I O N : No Existe Informacion</th>
			</tr>
			@endforelse
		</tbody>
		
	</table>
</center>
	
</body>
</html>