<?php

/**
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
 * Recuperamos la informacion de la sesion.
 */
session_start();

/**
 * Añadimos la pagina head.php con el contenido del head.
 */
require_once ('./vista/head.php');

/**
 * Añadimos la pagina body.php con el cuerpo de la aplicación.
 */
require_once ('./vista/body.php');

/**
 * Añadimos la pagina footer.php con el pie de la aplicacion.
 */
require_once ('./vista/footer.php');

?>