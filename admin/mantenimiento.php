<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <script src="js/jquery.min.js"></script>
    <title>Mantenimiento</title>
</head>
<body>
    <a class="btn btn-info volver" href="../subir.php">Volver</a>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php 
                require 'conexion.php';
                echo '<h5>Catálogo actual:</h5>';
                echo '<table class="table table-hover">';
                echo '<tr><th>N° Registro</th><th>Marca</th><th>Modelo</th><th>Versión</th><th>Foto portada</th><th>Modificar</th><th>Borrar</th></tr>';
                $bd = "SELECT * FROM autos ORDER BY marca";
                $listado = mysqli_query($conexion, $bd);
                while ($mostrar = mysqli_fetch_array($listado)) {
                    echo '<tr>';
                    echo '<td>'.$mostrar['id'].'</td>';
                    echo '<td>'.$mostrar['marca'].'</td>';
                    echo '<td>'.$mostrar['modelo'].'</td>';
                    echo '<td>'.$mostrar['vertion'].'</td>';
                    echo '<td><img src="../cars/id'.$mostrar['id'].'/'.$mostrar['img1'].'" alt=""></td>';
                    ?>
                    <td><a href="modificar.php?codigo=<?php echo $mostrar['id'] ?>" class="modificar"><i class="far fa-edit"></i></a></td>
                    <td><a href="baja.php?codigo=<?php echo $mostrar['id'] ?>" onclick="return confirm('¿Seguro que desea eliminar este Vehículo?');" class="borrar"><i class="fas fa-trash-alt"></i></a></td>
                    <?php
                    echo '</tr>';
                }
                echo '</table>';	
                ?>
            </div>
        </div>
    </div>
    <a href=""></a>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>