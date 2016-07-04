<?php

/* 
 * Copyright (C) 2016 Antonio Horrillo Horrillo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Control de los errores.
 */
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
    400 => array('400 Bad Request - Solicitud incorrecta', 'Existe un problema con la dirección que has escrito. Puede que no estés autorizado para acceder a la página Web o no exista.'),
    401 => array('401 Login Error - No autorizado', 'No puedes acceder porque no has iniciado sesión correctamente. Revisa el nombre de usuario y la contraseña.'),
    403 => array('403 Forbidden - Prohibido', 'Lo sentimos, no tiene permiso de acceso a este recurso.'),
    404 => array('404 Missing - No encontrado', 'La página Web ya no existe en el servidor o no se encuentra. Revisa la dirección cuidadosamente e intenta escribirla de nuevo.'),
    405 => array('405 Method Not Allowed - Método no permitido', 'Una petición fue hecha a una URI utilizando un método de solicitud no soportado por dicha URI.'),
    408 => array('408 Request Timeout - Tiempo de espera agotado', 'El cliente falló al continuar la petición con el servidor.'),
    414 => array('414 URL To Long - URI demasiado larga', 'La URL introducida es mas larga del máximo permitido.'),
    500 => array('500 Internal Server Error - Error interno', 'El recurso esta inaccesible por un problema encontrado en el servidor.'),
    502 => array('502 Bad Gateway - Pasarela incorrecta', 'El servidor recibió una respuesta inválida desde un servidor de flujo ascendente al cual accedió para completar la solicitud.'),
);

$errortitle = $codes[$status][0];
$message = $codes[$status][1];

if ($errortitle == false) {
    $errortitle = "Error Desconocido.";
    $message = "Se ha producido un error desconocido.";
}
?>

<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página Personal">
        <meta name="author" content="Antonio Horrillo Horrillo">

        <title><?php echo("$errortitle"); ?></title>

        <!-- CSS -->
        <link href="/vista/css/bootstrap.min.css" rel="stylesheet">
        <link href="/vista/css/font-awesome.min.css" rel="stylesheet">
        <link href="/vista/css/animate.css" rel="stylesheet">
        <link href="/vista/css/estilos.css" rel="stylesheet">

        <!-- JavaScript -->
        <script src="/vista/js/jquery-2.2.0.min.js"></script>
        <script src="/vista/js/bootstrap.min.js"></script>
        <script src="/vista/js/jquery.appear.js"></script>  

        <!--  Favicon -->
        <link rel="shortcut icon" href="/vista/img/logo/logo.png" type="image/png" sizes="any"/>

        <!--  Fuentes -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    </head>

    <body>
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1><?php echo($errortitle); ?></h1>
                            <span><?php echo($message); ?></span>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <div class="mainbody-section text-center">
            <div class="container">               
                <div class="row">
                    <div class="col-md-4 col-md-offset-4" style="padding-top: 200px">                       
                        <div class="menu-item light-red responsive">
                            <a href="/index.php" data-toggle="modal">
                                <i class="fa fa-exclamation-triangle"></i>
                                <p>Volver al Inicio</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>  