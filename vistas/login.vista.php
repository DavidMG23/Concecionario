<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container caja">
        <div class="row">
            <div class="col-md-12">
                <h2>Iniciar Sesión</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="formLogin" name="login">
                    <div class="form-grup">
                        <i class="icono fas fa-user-tie"></i>
                        <input type="text" name="usuario" class="usuario" placeholder="Usuario">
                    </div>
                    <div class="form-grup">
                        <i class="icono fas fa-fingerprint"></i>
                        <input type="password" name="password" class="password" placeholder="Contraseña">
                    </div>
                    <div class="form-grup col-12">
                    <button type="submit" class="btn btn-success"><i class="fas fa-power-off"></i> Iniciar</button>
                    </div>
                    <?php if (!empty($errores)): ?>
                        <div>
                            <ul>
                                <?php echo $errores; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </form>
                <a href="Index.php" id="volver">Volver</a>
            </div>
        </div>
    </div>

    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>