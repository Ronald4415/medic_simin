<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Adicion nuevas Categorias</title>
</head>
<body>

	<section class="formulario_reg">
		<center>
			<h1>Empresa Colombiana de Software</h1>
			<h2>Formulario Captura Categorias</h2>

			<form action="{{route('salva_datos')}}" method="POST" enctype="multipart/form-data">

				@csrf

				<input class="controles" type="text" name="Descrip_cat" placeholder="Digite el Nombre de la Categoria">
				<input class="controles" type="file" name="imagen_cate" placeholder="Seleccione la Imagen a subir">
								
				<input class="boton" type="submit" value="Enviar">
				
				<p><a href="">retornar a Categorias</a></p>
				
			</form>
		</center>
	</section>


	
</body>
	
</html>