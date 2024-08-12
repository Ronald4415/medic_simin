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

		<form action="{{route('actualiz_datos',$catego->id)}}" method="POST">
			@csrf

			<input type="hidden" name="categoria_id" value="{{$catego->id}}">

			
			<input class="controles" type="text" name="Descrip_cat" value="{{$catego->Descrip_cat}}">
			<input class="controles" type="File" name="imagen_nueva" value="{{$catego->imagen_cate}}">
			
			<input class="boton" type="submit" value="Enviar">
			
			<p><a href="">retornar a Categorias</p>
			
		</form>
		</center>
	</section>

	
</body>
	
</html>