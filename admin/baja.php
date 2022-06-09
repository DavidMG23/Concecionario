<?php 
require 'conexion.php';
    // Borra los datos en la base de datos
    $consulta = "DELETE FROM autos WHERE id = $_REQUEST[codigo]";
    $borrar = mysqli_query($conexion, $consulta);
    
    // Borra la carpeta y las fotos del vehiculo
    $carpeta = "../cars/id". $_REQUEST['codigo'] ."/";
    foreach(glob($carpeta."/*.*") as $archovo_carpeta){
        unlink($archovo_carpeta);
    }
    rmdir($carpeta);

header ('Location: mantenimiento.php');
?>