<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	
	<title>Edicion Clientes</title>
</head>
<body>
	<center>
		
		<section class="formulario_reg">
		<h1>EMPRESA COLOMBIANA DE SOFTWARE</h1>
		<H2>Formulario Edicion de Clientes</H2>
		<form action="{{route('actualizar_clientes', $clien->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('put')

			<input class="controles" type="text" name="nitcli" value="{{$clien->nit_cli}}">
			<input class="controles" type="text" name="nombre_cli" value="{{$clien->nombres_cli}}">
			<input class="controles" type="text" name="direc_cli" value="{{$clien->direccion_cli}}">
			<input class="controles" type="text" name="tel_cli" value="{{$clien->nro_telef}}">
			<input class="controles" type="text" name="correo_cli" value="{{$clien->correo_ele}}">
			<input class="controles" type="file" name="nomb_archi" value="{{$clien->foto_cliente}}">
			<input class="boton" type="submit" name="enviar" value="Enviar">
			<input type="hidden" name="dato" value="{{$clien->id}}">

		</form>	
			<p><a href="{{route('clientes')}}">Menu Clientes</a></p>

		</section>
	</center>
	
</body>
</html>