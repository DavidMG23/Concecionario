<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <!-- <meta http-equiv="refresh" content="30"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Agencia NOMBRE</title>
    <meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="">
	<meta property="og:image" content="">
    <meta property="og:description" content="">
    <script src="js/jquery.min.js"></script>
    <script src="js/peticion.js"></script>
</head>
<body> 
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="menu-nav">
                        <div class="box">
                        <!-- navegación -->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#home" data-toggle="tab">
                                        <img class="icono" src="img/home.svg" alt="home">
                                        <span class="hidden-xs">Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#nosotros" data-toggle="tab">
                                        <img class="icono" src="img/nosotros.svg" alt="home">
                                        <span class="hidden-xs">Nosotros</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#vehiculo" data-toggle="tab">
                                        <img class="icono" src="img/cars.svg" alt="home">  
                                        <span class="hidden-xs">Nuestros Vehículos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#faqs" data-toggle="tab">
                                        <img class="icono" src="img/preguntas.svg" alt="home">
                                        <span class="hidden-xs">Preguntas Frecuentes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#legales" data-toggle="tab">
                                        <img class="icono" src="img/legales.svg" alt="home">
                                        <span class="hidden-xs">Legales</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#admin" data-toggle="tab">
                                        <img class="icono" src="img/user.svg" alt="home">
                                        <span class="hidden-xs">Admin</span>
                                    </a>
                                </li>
                            </ul>
                        <!-- fin navegación -->                       
                        <!-- Tab panel -->
                            <div class="tab-content">                                
                                <!-- Product tab -->
                                <div class="tab-pane active" id="home">
                                    <img class="imgHome" src="img/portada1.png"  alt="fondo">
                                </div>
                                <!-- End id="product" -->                                
                                <!-- nosotros tab -->
                                <div class="tab-pane" id="nosotros">
                                    <h5 class="tituloMovil d-none">Nosotros</h5>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi inventore ab qui ea odio cum, quasi iure labore, adipisci tempore deserunt similique esse, repellendus harum eius! Rem, facere magni amet blanditiis et nulla unde autem nostrum omnis magnam porro itaque voluptate nam! Libero nobis officiis voluptatem sit consequatur sint ratione!</p>						
                                </div>
                                <!-- End nosotros -->
                                <!-- vehículos -->
                                <div class="tab-pane" id="vehiculo">
                                    <h5 class="tituloMovil d-none">Nuestro Catalogo</h5>
                                    <section class="destacados">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 buscar">                    
                                                    <h5>Busca tu próximo vehículo:</h5>
                                                    <input class="form-control" type="text" name="busqueda" id="busqueda" placeholder="Ingresa Marca o Modelo">
                                                </div>
                                            </div>
                                        </div>
    
                                        <section class="fotos">
                                            <div class="container">
                                                <div class="row" id="tabla_resultado">
                                                    <section >
                                                    <!-- AQUÍ SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                                                    </section>                            
                                                </div>
                                            </div> 
                                        </section>
                                    </section>
                                </div>
                                <!-- End vehículos -->
                                <!-- faqs tab -->
                                <div class="tab-pane" id="faqs">
                                <h5 class="tituloMovil d-none">Preguntas Frecuentes</h5>
                                    <ul>
                                        <li>¿Pregunta?</li>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsam consectetur adipisci est error reiciendis exercitationem animi sint. A, reiciendis!</p>
                                        <li>¿Pregunta?</li>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsam consectetur adipisci est error reiciendis exercitationem animi sint. A, reiciendis!</p>
                                        <li>¿Pregunta?</li>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsam consectetur adipisci est error reiciendis exercitationem animi sint. A, reiciendis!</p>
                                        <li>¿Pregunta?</li>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsam consectetur adipisci est error reiciendis exercitationem animi sint. A, reiciendis!</p>
                                        <li>¿Pregunta?</li>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat ipsam consectetur adipisci est error reiciendis exercitationem animi sint. A, reiciendis!</p>
                                    </ul>
                                </div>
                                <!-- End faqs -->                                
                                <!-- tab legales -->
                                <div class="tab-pane" id="legales">
                                <h5 class="tituloMovil d-none">Legales</h5>
                                    <p>ofrecemos financiación de hasta un 50% de valor del vehículo a través de entidad bancaria.</p>
                                </div>
                                <!-- End legales -->
                                <!-- admin -->
                                <div class="tab-pane" id="admin">
                                <h5 class="tituloMovil d-none">Administración</h5>
                                    <div class="container">
                                        <div class="cuadroMensaje">
                                            <img class="warning" src="img/warning.svg" alt="warning">
                                            <p class="mensaje">Esta sección es solo para administradores de la agencia.</p>
                                            <a href="login.php" class="btn btn-info">Ingresar</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End admin -->
                            </div>                                            
                        <!-- End tab panels container -->                            
                        </div>
                    </div>                                    
                </div>
            </div>
        </div>
    </header>
    <!-- ----- -->
    <section class="container destacados">
        <div class="row fondoTitulo">
            <div class="col-md-12">
                <h4 class="titulo">Destacados</h4>
            </div>
        </div>
        <section class="fotos">
            <div class="container">
                <div class="row">
                    <?php foreach($fotos as $foto):?>
                        <div class="tarjeta col-md-3">
                            <a href="eleccion.php?id=<?php echo $foto['id'];?>">
                                <img src="cars/id<?php echo $foto['id'].'/'.$foto['img1']; ?>" alt="">
                            </a>
                            <h6 class="nombreVehiculo"><?php echo $foto['marca'].' '. $foto['modelo'];?></h6>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 contacto">
                    <h5>Contáctanos</h5>
                    <i class="fas fa-warehouse"></i> Calle Mendoza 1500 sur - San Juan - Argentina <br>
                    <i class="fas fa-phone"></i> (264) 4201234 <br>
                    <div class="redes">
                        <a href="#" target="_blank" rel="noopener noreferrer" class="face"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="inst"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank" rel="noopener noreferrer" class="mapa"><i class="fas fa-map-marked-alt"></i></a>
                    </div>
                </div>
                <div class="col-md-6 horario">
                    <h5>Horarios</h5>
                    <ul>
                        <li><strong>Lunes:</strong> <span>8:30 a 13:00 - 16:30 a 20:30</span></li>
                        <li><strong>Martes:</strong> <span>8:30 a 13:00 - 16:30 a 20:30</span></li>
                        <li><strong>Miercoles:</strong> <span>8:30 a 13:00 - 16:30 a 20:30</span></li>
                        <li><strong>Jueves:</strong> <span>8:30 a 13:00 - 16:30 a 20:30</span></li>
                        <li><strong>Viernes:</strong> <span>8:30 a 13:00 - 16:30 a 20:30</span></li>
                        <li><strong>Sabado:</strong> <span>9:00 a 13:30 - 16:30 a 20:30</span></li>
                        <li><strong>Domingo:</strong> <span>Cerrado</span></li>

                    </ul>
                </div>
            </div>
        </div>
        <p class="copyright">Copiright 2019 | Creado por <a class="unique" href="#" target="_blank" rel="noopener noreferrer">Unique Code</a></p>
    </footer>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
</body>
</html>