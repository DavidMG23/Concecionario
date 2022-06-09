<?php 
require 'admin/conexion.php';
// valores iniciales
$tabla = "";
$consulta = "SELECT * FROM autos ORDER BY marca";

// Al buscar

if (isset($_POST['auto'])) {
    $q=$conexion->real_escape_string($_POST['auto']);
    $consulta = "SELECT * FROM autos WHERE 
        marca LIKE '%".$q."%' OR
        modelo LIKE '%".$q."%'";
}
$buscarVehiculo=$conexion->query($consulta);
if ($buscarVehiculo->num_rows > 0) {
    while($vehiculos = $buscarVehiculo->fetch_assoc()){ ?>
    <div class="tarjeta movil col-md-3">
        <a href="eleccion.php?id=<?php echo $vehiculos['id'];?>">
            <img src="cars/id<?php echo $vehiculos['id'].'/'.$vehiculos['img1']; ?>" alt="">
        </a>
        <h6 class="nombreVehiculo"><?php echo $vehiculos['marca'].' '. $vehiculos['modelo'];?></h6>
    </div>
        <?php }
 
} else {
    $tabla .= '<p class="error">No hay coincidencias vuelve a intentar.</p>';
}
echo $tabla;
?>