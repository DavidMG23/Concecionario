<?php 
    require 'admin/conexion.php';
    $marca = "SELECT * FROM marca ORDER BY marca";
    $marcas = mysqli_query($conexion, $marca);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Subiendo Vehículo</title>
    <meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">
    <script src="js/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
			$("#marca").change(function () {
				$("#marca option:selected").each(function () {
					ID_Dpto = $(this).val();
					$.post("admin/selecModelo.php", { ID_Dpto: ID_Dpto }, function(data){
						$("#modelo").html(data);
					});            
				});
			})
		});
	</script>
</head>
<body>
<header>
        <div class="container">
            <h1 class="tituloGral">Panel de Administración</h1>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mantenimiento">
                <h2 class="titulo">Opciones</h2>
                <a href="admin/mantenimiento.php" class="btn btn-warning botonOp">Modificaciones / bajas</a><br>
                <a href="registro.php" class="btn btn-success registrate botonOp">Registrar nuevo usuario</a><br>
                <a href="admin/cerrar.php" class="btn btn-primary botonOp">Cerrar Sesión</a>
            </div>
            <div class="col-md-8 fomrulario">
                <h2 class="titulo">Carga de Vehículos</h2>
                <form class="form-row" name="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                    <div class="was-validated form-group col-md-4">
                        <select class="custom-select" name="marca" id="marca" required>
                            <option value="">Elija Marca</option>

                            <?php while($opcion = $marcas->fetch_assoc()) { ?>
                            <option value="<?php echo $opcion['marca']; ?>"><?php echo $opcion['marca']; ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="was-validated form-group col-md-4">
				    	<select class="custom-select" name="modelo" id="modelo" required>
						    <option value=''>Seleccionar Modelo</option>
						</select>
				  	</div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="vertion" name="vertion" placeholder="Versión" required>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="equipamiento" id="equipamineto" maxLength="500" placeholder="Equipamiento (maximo 500 caracteres)" required></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="extras" id="extras" maxLength="500" placeholder="Extras (maximo 500 caracteres)" required></textarea>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="color" name="color" placeholder="Color">
                    </div>
                    <div class="form-group col-md-2">
                        <select class="custom-select" name="combustible" id="combustible" required>
						    <option value=''>Combustible</option>
						    <option value='Nafta'>Nafta</option>
						    <option value='Diesel'>Diésel</option>
						    <option value='Gas'>Gas</option>
						</select>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="mano" name="mano" placeholder="Estado">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="km" name="km" placeholder="Kilometros" title="Solo Numero" required>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="number" min="1900" class="form-control" id="ano" name="ano" placeholder="Año" title="ingrese año desde 1900"required>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Precio" title="Expesifique moneda $ - U$S" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Numero de WhatsApp del Vendedor:</label>
                        <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Ej: 2645123456" required>
                    </div>
                    <div class="form-group col-md-12 fotos">
                        <label for="img1">Primera foto (Obligatoria)</label>
                        <input type="file" id="img1" name="img1" class="form-control-file" required>
           
                        <label for="img2">Segunda foto (Opcional)</label>
                        <input type="file" id="img2" name="img2" class="form-control-file">             

                        <label for="img3">Tercera foto (Opcional)</label>
                        <input type="file" id="img3" name="img3" class="form-control-file">             

                        <label for="img4">Cuarta foto (Opcional)</label>
                        <input type="file" id="img4" name="img4" class="form-control-file">             

                        <label for="img5">Quinta foto (Opcional)</label>
                        <input type="file" id="img5" name="img5" class="form-control-file">             

                        <label for="img6">Sexta foto (Opcional)</label>
                        <input type="file" id="img6" name="img6" class="form-control-file">             

                        <label for="img7">Septima foto (Opcional)</label>
                        <input type="file" id="img7" name="img7" class="form-control-file">             
                    </div>
                    <div class="form-group col-md-12 pie">
                        <?php if (isset($error)): ?>
                            <p class="error"><?php echo $error; ?></p>
                        <?php endif ?>
                        <input type="submit" class="submit btn btn-success" value="Subir Vehiculo">
                    </div>

                </form>
            </div>
        </div>
    </div>
    
    <script src="js/pooper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
