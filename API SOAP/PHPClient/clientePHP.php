
<?php
	require_once 'lib/nusoap.php';

	$cliente =  new nusoap_client("http://localhost:8080/API%20SOAP/services/Funciones?wsdl",true);

	$nombres = "AlaN JACEk";
	$apPaterno = "SLazaK";
	$apMaterno = "CAStro";
	$genero = "M";
	
	$rut= array('rut'=>"19.893.570-0");

	$nombre = array('nombres'=> $nombres,'apPaterno'=>$apPaterno,'apMaterno'=>$apMaterno,'genero'=>$genero);

	$nombrePropio = $cliente->call("nombrePropio",$nombre);
	$valRut = $cliente->call("validarRut",$rut);

	print_r($nombrePropio);
	echo "<br>";
	print_r($valRut);

?>



