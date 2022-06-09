<?php
// require 'admin/conexion.php';
function conexion($tabla, $usuario, $pass){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}
$fotos_por_pagina = 4;
// si get con su valor p esta setiada (?)entonces usamos el valor de get (int estero) (deotra forma :) que valga 1
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

$conexion = conexion('agencia', 'root', '');
if (!$conexion) {
    die();
}
// traer todas las fotos entre los limites inicio y fotos por pagina y con (SQL_CALC_FOUND_ROWS) calculamos cuantas fotos hay en la BD
$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM autos ORDER BY RAND() LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();

//si no hay fotos
if (!$fotos) {
    Header('Location: index.php'); // lo redirigimos a la pagina de inicio (pero seria mejor a una pagina de error)
}

//trae todas las filas con (FOUND_ROWS()) como (as) total_filas (que en este caso son el total de fotos en la BD)
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
//guardamos en una variable ese valor
$total_fotos = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_fotos / $fotos_por_pagina); //ceil redondeo hacia arriba
require 'vistas/index.vista.php';
?>