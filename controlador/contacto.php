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
 * Enviamos el mail.
 */

/**
 * Comprobamos si los campos estan vacíos.
 */
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
/**
 * Asociamos las variables a los datos recibidos por POST.
 */
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
/**
 * Componemos el mensaje.
 */
$to = 'contacto@antoniohorrillo.com';
$email_subject = "Mensaje enviado por $name desde www.antoniohorrillo.com";
$email_body = "Has recibido un nuevo mensaje del formulario de contacto de la web www.antoniohorrillo.com.\n\n".
        "Aquí están los detalles del mensaje:\n\nNombre: $name\n\nEmail: $email_address\n\nTeléfono: $phone\n\nMensaje:\n$message";
$headers = "From: webmaster@antoniohorrillo.com\n"; // noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";

/**
 * Ejecutamos la funcion mail de PHP y enviamos el mensaje.
 */
mail($to,$email_subject,$email_body,$headers);

/**
 * Retornamos true.
 */
return true;			
?>