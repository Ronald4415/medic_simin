<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Creacion Proveedores</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
	<section class="formulario_reg">
		<center><h1>Empresa Colombiana de Software</h1>
		<h2>Formulario Captura Proveedores</h2>

		<form action="{{route('crearproveedor')}}" method="post">
			@csrf

			<input class="controles" type="text" name="nit" placeholder="Nit Proveedor">
			<input class="controles" type="text" name="nombre_prov" placeholder="Digite el Nombre del Proveedor">
			<input class="controles" type="text" name="Dir_prov" placeholder="Digite la Direccion de la Empresa">
			<input class="controles" type="text" name="telefo" placeholder="Digite el Nro Telef">
			<input class="controles" type="text" name="represen" placeholder="Nombre Representante">

			<input class="boton" type="submit" name="enviar" value="Enviar">

			<p><a href="{{route('proveedor')}}">Proveedores</a></p>
		</form>
		</center>
	</section>		
</body>
</html>