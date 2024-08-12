<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	
	<title>Document</title>
</head>
<body>
	<center>
		
		<section class="formulario_reg">
		<h1>EMPRESA COLOMBIANA DE SOFTWARE</h1>
		<H2>Formulario Adicion de Clientes</H2>
		<form action="{{route('adicion_cliente')}}" method="post" enctype="multipart/form-data">
			@csrf

			<input class="controles" type="text" name="nitcli" placeholder="Digite el Nro de Identidad">
			<input class="controles" type="text" name="nombre_cli" placeholder="Digite el Nombre del Cliente">
			<input class="controles" type="text" name="direc_cli" placeholder="Digite la Direccion del Cliente">
			<input class="controles" type="text" name="tel_cli" placeholder="Digite el Nro telefonico">
			<input class="controles" type="text" name="correo_cli" placeholder="Digite el Correo Electronico">
			<input class="controles" type="file" name="nomb_archi">
			<input class="boton" type="submit" name="enviar" value="Enviar">

		</form>	
			<p><a href="{{route('clientes')}}">Menu Clientes</a></p>

		</section>
	</center>
	
</body>
</html>