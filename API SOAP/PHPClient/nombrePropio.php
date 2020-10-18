<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Propio</title>
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

            $nombres = $_POST['nombres'];
            $apPaterno = $_POST['apPaterno'];
            $apMaterno = $_POST['apMaterno'];
            $genero = $_POST['genero'];

            $nombre = array('nombres'=> $nombres,'apPaterno'=>$apPaterno,'apMaterno'=>$apMaterno,'genero'=>$genero);
            $nombrePropio = null;
        ?>
        <?php if($nombres != "" && $apPaterno != "" && $apMaterno != ""){
                $nombrePropio = $cliente->call("nombrePropio",$nombre);
            }
        ?>
        <?php if($nombrePropio): ?>
            <div class="container">
                <div class="jumbotron jumbotron-fluid bg-primary text-white container fadeIn mensaje mt-4">
                    <div class="container">
                        <h3 class="text-center mb-2">Resultado:</h3>
                        <p class="lead text-center"> <?php var_export($nombrePropio)?> </p>
                        <div class="text-center">
                            <a class="btn btn-aqua btn-lg mr-3" href="./nombre.html" role="button">Volver</a>
                        </div>
                    </div>
                </div>
                
            </div>
        <?php else: ?>
            <div class="jumbotron jumbotron-fluid bg-danger text-white container fadeIn mensaje mt-4">
                <h3 class="text-center mb-2">Resultado:</h3>
                <div class="container text-center">
                    <p>No debe quedar ningun campo en blanco! 🤔</p>
                </div>
                <div class="text-center">
                    <a class="btn btn-pink btn-lg mr-3" href="./nombre.html" role="button">Volver</a>
                </div>
            </div>
        <?php endif ?>
    <div>
</body>
</html>
