
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validar RUT</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light menu">
        <span class="navbar-brand mb-0 h1">Trabajo nº1 RCD</span>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./rut.html">Validar RUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./nombre.html">Nombre propio</a>
            </li>
        </ul>
    </nav>
</header>

<body>
	<div class="container">
	<?php
		require_once 'lib/nusoap.php';

		$cliente =  new nusoap_client("http://localhost:8080/API%20SOAP/services/Funciones?wsdl");

		$getRut = $_POST['rut'];	
		$rut = array('rut'=>$getRut);
		$valRut = $cliente->call("validarRut",$rut);

	?>
	<?php if($valRut == 'true'): ?>
		<div class="container">
			<div class="jumbotron jumbotron-fluid bg-success text-white container fadeIn mensaje mt-4">
				<h3 class="text-center mb-2">Resultado:</h3>
				<div class="container text-center">
					<p>El RUT es valido, Hurra 😄!</p>
				</div>
				<div class="text-center">
					<a class="btn btn-aqua btn-lg mr-3" href="./rut.html" role="button">Volver</a>
				</div>
			</div>
		</div>
	<?php else:?>
		<div class="jumbotron jumbotron-fluid bg-danger text-white container fadeIn mensaje mt-4">
			<h3 class="text-center mb-2">Resultado:</h3>
			<div class="container text-center">
				<p>El RUT no es valido! 😞</p>
			</div>
			<div class="text-center">
				<a class="btn btn-pink btn-lg mr-3" href="./rut.html" role="button">Volver</a>
			</div>
		</div>
	<?php endif ?>
	</div>
</body>
</html>


