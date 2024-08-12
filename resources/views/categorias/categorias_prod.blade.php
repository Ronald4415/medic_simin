<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>	
<body>
	<center><h1>Menu de Categorias</h1>
		<h2>Categorias Encontradas</h2>
		<p><a href="">Crear nueva Categoria</a></p>
		<table>
			<thead>
				<tr>
					<th>ID</th><th>Descripcion Categoria</th><th>Posibles Acciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@forelse($cate as $catego)
					<tr>
						<th>{{$catego->id}}</th>
						<th>{{$catego->Descrip_cat}}</th>
						<th>{{$catego->imagen_cate}}</th>
						<th>
							<td> |

								<form method="post" action="{{url('/categorias/borrar_cat/'.$catego->id)}}">
									@csrf
									{{Method_field('DELETE')}}
									<button type="submit" onclick="return confirm('Borrar ?');">Eliminacion</button>
								</form>

							</td>


						</th>
						
					</tr>
					@empty
					<h1>No esxisten Datos</h1>

					@endforelse
				</tr>
				

			</tbody>
		</table>
	</center>	
</body>
</html>