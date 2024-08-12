<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>Adicion Localidades</title>
</head>
<body>
	<section class="formulario_reg">
	<center><h1>EMPRESA COLOMBIANA DE SOFTWARE</h1>
	<h2>Formulario Captura Localidades</h2>
		<form action="{{route('adic_loc')}}" method="post">
		
		@csrf
		<h2>Adicion</h2>
		<input class="controles" type="text" name="identidad" placeholder="Digite el Codigo de la Localidad">
		<input class="controles" type="text" name="descrip_loc" placeholder="Digite el nombre de la Localidad">

		<input class="boton" type="submit" name="enviar" value="Enviar">


		</form>

			<p><a href="{{route('localidad')}}">Localidades</a></p>
		</form>
		</center>
	</section>






	</center>
	</section>
	
</body>
</html>