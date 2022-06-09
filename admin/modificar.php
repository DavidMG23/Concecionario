<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <title>Subiendo Vehículo</title>

    <script src="../js/jquery.min.js"></script>
</head>
<body>
<a class="btn btn-info volver" href="mantenimiento.php">Volver</a>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="titulo">Modificar publicación</h2>
                <!-- Conexión y trayendo la publicación -->
                <?php session_start();
                    require 'conexion.php';
                    $marca = "SELECT * FROM marca ORDER BY marca";
                    $marcas = mysqli_query($conexion, $marca);

                    $modPubli = "SELECT * FROM autos WHERE id=$_REQUEST[codigo]";
                    $respueta = mysqli_query($conexion, $modPubli);

                    if ($reg=$respueta->fetch_array()) {
                ?>
                <form class="form-row" name="formulario" action="modificar2.php" method="post" enctype="multipart/form-data">
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="<?php echo $reg['marca'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" value="<?php echo $reg['modelo'];?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="vertion" name="vertion" placeholder="Versión" value="<?php echo $reg['vertion'];?>">
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="equipamiento" id="equipamiento" maxLength="500" placeholder="Equipamiento"><?php echo $reg['equipamiento'];?></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="extras" id="extras" maxLength="500" placeholder="Extras"><?php echo $reg['extras'];?></textarea>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="color" name="color" value="<?php echo $reg['color'];?>" placeholder="Color">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="combustible" name="combustible" value="<?php echo $reg['combustible'];?>" placeholder="Combustible">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="mano" name="mano" value="<?php echo $reg['mano'];?>" placeholder="Estado">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="km" name="km" value="<?php echo $reg['km'];?>" placeholder="Km">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" min="2000" max="2019" class="form-control" id="ano" name="ano" value="<?php echo $reg['ano'];?>" placeholder="Año">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $reg['valor'];?>" placeholder="Valor">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Numero de WhatsApp del Vendedor:</label>
                        <input type="text" class="form-control" id="contacto" name="contacto" value="<?php echo $reg['contacto'];?>" placeholder="Ej: 2645123456">
                    </div>                    
                    <div class="form-group col-md-12 fotos">
                        <label for="img1">Primera foto</label>
                        <input type="file" id="img1" name="img1" class="form-control-file">
           
                        <label for="img2">Segunda foto</label>             
                        <input type="file" id="img2" name="img2" class="form-control-file">

                        <label for="img3">Tercera foto</label>
                        <input type="file" id="img3" name="img3" class="form-control-file">             

                        <label for="img4">Cuarta foto</label>
                        <input type="file" id="img4" name="img4" class="form-control-file">             

                        <label for="img5">Quinta foto</label>
                        <input type="file" id="img5" name="img5" class="form-control-file">             

                        <label for="img6">Sexta foto</label>
                        <input type="file" id="img6" name="img6" class="form-control-file">             

                        <label for="img7">Septima foto</label>
                        <input type="file" id="img7" name="img7" class="form-control-file">             
                    </div>
                    <div class="form-group col-md-12 pie">
                        <?php if (isset($error)): ?>
                            <p class="error"><?php echo $error; ?></p>
                        <?php endif ?>

                        <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">
                        <input type="submit" class="submit btn btn-warning" value="Modificar">
                    </div>

                </form>
                <?php } ?>
            </div>
        </div>
    </div>
    
    <script src="../js/pooper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
