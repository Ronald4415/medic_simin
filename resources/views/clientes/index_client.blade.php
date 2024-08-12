<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Principal Clientes</title>
</head>
<body>
	<center><h1>Pagina Principal Clientes</h1>
		
		<h2>Opcion de clientes</h2>
		<p><a href="{{route('clien_crea')}}">Adicionar Clientes</a></p>
		
		
		<table align="centar" border="3">
			<thead>
				<tr>
					<th>ID</th><th>Nit Cliente</th><th>Nombres Cliente</th><th>Direccion Cliente</th><th>Imagen</th><th colspan="2">Opciones Creadas</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@forelse($clientes as $client)
					<tr>
						<input type="hidden" name="$id" value="{{'$clien->id'}}">
						<th>{{$client->id}}</th>
						<th>{{$client->nit_cli}}</th>
						<th>{{$client->nombres_cli}}</th>
						<th>{{$client->direccion_cli}}</th>
						<th>

						<td>
							<a href="{{route('clientes_editar', $client->id)}}"><img src="{{asset('img/Edicion_reg.jpg')}}" width="40" height="30" alt="Edicion Registros" title="Editar Registros">|  |</a>  

							<a href="{{route('clientes_elimina', $client->id)}}"><img src="{{asset('img/eliminar_reg.png')}}" width="40" height="30" alt="Eliminacion de Registros" title="Eliminar Registro"></a>
						</td>
						</th>
					</tr>

					@empty
					<tr>

					    <th><h2>Registros No Encontrado</h2></th>						
					 </tr>
					@endforelse
				</tr>
			</tbody>
		</table>
	</center>	
</body>
</html>

