<?php 
require 'admin/conexion.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;
// $id = 3;

if (!$id) {
    // header ('Location: index.php');
}

$auto = "SELECT * FROM autos WHERE id = $id";
$elecAuto = mysqli_query($conexion, $auto);

$eleccion = mysqli_fetch_array($elecAuto);

require 'vistas/eleccion.vista.php';
?>