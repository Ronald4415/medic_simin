<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Document</title>
</head>
<body>Adicion Sistema de Categorias</h1></center>

	<section class="formulario_reg">
		<center><h1>Empresa Colombiana de Software</h1>
		<h2>Formulario Captura Categorias</h2>

		<form action="{{route('crearcategorias')}}" method="post">
			@csrf

			
			<input class="controles" type="text" name="nombre_catego" placeholder="Digite el Nombre de la Categoria">
			

			<input class="boton" type="submit" name="enviar" value="Enviar">

			<p><a href="{{route('proveedor')}}">Proveedores</a></p>
		</form>
		</center>
	</section>

	
</body>
	
</html>