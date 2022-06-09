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
    <link rel="stylesheet" href="css/estilos.css">
    <title><?php echo $eleccion['marca'].' '. $eleccion['modelo'];?></title>
    <meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="">
	<meta property="og:image" content="">
    <meta property="og:description" content="">
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
    <header>
        <div class="menu">
            <button class="btn btn-secondary" onclick="goBack()">Volver</button>
        </div>
        <div class="alert alert-success alert-dismissible fade show d-none" id="mensaje" role="alert">
            Si giras el móvil podrás ver las fotos en toda la pantalla.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="galeria">
                    <ul class="obgaleria" id="galeria1">
                        <li><img src="cars/id<?php echo $eleccion['id'].'/'.$eleccion['img1']; ?>"></li>
                        <li><img src="cars/id<?php echo $eleccion['id'].'/'.$eleccion['img2']; ?>"></li>
                        <li><img src="cars/id<?php echo $eleccion['id'].'/'.$eleccion['img3']; ?>"></li>
                        <li><img src="cars/id<?php echo $eleccion['id'].'/'.$eleccion['img4']; ?>"></li>
                        <li><img src="cars/id<?php echo $eleccion['id'].'/'.$eleccion['img5']; ?>"></li>
                        <li><img src="cars/id<?php echo $eleccion['id'].'/'.$eleccion['img6']; ?>"></li>
                        <li><img src="cars/id<?php echo $eleccion['id'].'/'.$eleccion['img7']; ?>"></li>
                    </ul>    
                </div>
            </div>
            <div class="col-md-5">
                <div class="detalles">
                    <img class="logo" src="logos/<?php echo $eleccion['marca']; ?>.png" alt="<?php echo $eleccion['marca']?>">
                    <h4 class="version"><?php echo $eleccion['modelo'].' - '. $eleccion['vertion'] ?></h4>
                    <div class="equipamiento">
                        <h5>Equipamiento:</h5>
                        <p><?php echo $eleccion['equipamiento'] ?></p>
                    </div>
                    <div class="equipamiento">
                        <h5>Extras:</h5>
                        <div class="row">
                            <div class="col-12">
                                <p><?php echo $eleccion['extras'] ?></p>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li>Color: <b><?php echo $eleccion['color'] ?></b></li>
                                    <li>Combustible: <b><?php echo $eleccion['combustible'] ?></b></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li>Estado: <b><?php echo $eleccion['mano'] ?></b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row etiquetas">
                        <div class="col-4 KM"><?php echo $eleccion['km'] ?> Km</div>
                        <div class="col-3 ANO"><?php echo $eleccion['ano'] ?></div>
                        <div class="col-5 PRECIO"><?php echo $eleccion['valor'] ?></div>
                        <?php
                        $host = $_SERVER["HTTP_HOST"];
                        $url = $_SERVER["REQUEST_URI"];
                        $consulta = "Consulta por "." "."https://".$host.$url;
                        $compartir = "https://".$host.$url;
                        ?>
                        
                        <div class="col-2 contacto d-none"><img src="img/whatsapp.svg" alt=""></div>
                        <div class="col-5 contacto d-none"><a href="whatsapp://send?phone=549<?php echo $eleccion['contacto']?>&text=<?php echo $consulta;?>">¿Estas Interesado?</a></div>
                        <div class="col-5 contacto d-none"><a href="whatsapp://send?text=<?php echo $compartir;?>">Compartir</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
    <p class="copyright">Copiright 2019 | Creado por <a class="unique" href="#" target="_blank" rel="noopener noreferrer">Unique Code</a></p>
    </footer>
    
    <script src="js/jquery.min.js"></script>
    <script type='text/javascript'>
        var prop = 60.00; // proporción alto/ancho*100 imagen principal
        $("ul.obgaleria").each(function() {
        var id = "#" + $(this).attr("id");
        var ancho = 100 / $(id + " li").length;
        $("head").append("<style>" + id + "{padding: 0 0 " + (prop + ancho) + "% 0;} " + id + " li{width:" + ancho + "%;padding: 0 0 " + ancho + "% 0;} " + id + " li:first-child {width: 100%;padding-bottom: " + prop + "%;}</style>");
        $(id + " li:first-child").clone().prependTo(id);
        $(id + " li:first-child img").css({
        "width": "100%"
        });
        $(id + " li").click(function() {
        $(id + " li:first-child").remove()
        $(this).clone().prependTo(id);
        $(id + " li:first-child img").animate({
        width: "100%"
        }, 200);
        });
        });
    </script>
    <script src="js/efectos.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>