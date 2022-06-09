<?php 
    $conexion = new mysqli ('localhost', 'root', '', 'agencia');
	if ($conexion->connect_errno) {
        die('Error de conexion');
    }
?>