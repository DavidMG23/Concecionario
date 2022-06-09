<?php session_start();
if (isset($_SESSION['usuario'])) {

require 'admin/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    //comprobar que sea una imagen
    // getimagensize retorna un arreglo con las propiedades de la img. de lo contrario es false
    $check = @getimagesize($_FILES['img1']['tmp_name']);
    if ($check !== false) {
        //rellenando la BD
        $id              = null;
        $marca           = $_POST['marca'];
        $modelo          = $_POST['modelo'];
        $vertion         = $_POST['vertion'];
        $equipamiento    = $_POST['equipamiento'];
        $extras          = $_POST['extras'];
        $color           = $_POST['color'];
        $combustible     = $_POST['combustible'];
        $mano            = $_POST['mano'];
        $km              = $_POST['km'];
        $ano             = $_POST['ano'];
        $valor           = $_POST['valor'];
        $img1            = $_FILES['img1']['name'];
        $img2            = $_FILES['img2']['name'];
        $img3            = $_FILES['img3']['name'];
        $img4            = $_FILES['img4']['name'];
        $img5            = $_FILES['img5']['name'];
        $img6            = $_FILES['img6']['name'];
        $img7            = $_FILES['img7']['name'];
        $contacto        = $_POST['contacto'];
        
        $insertar = "INSERT INTO autos (id, marca, modelo, vertion, equipamiento, extras, color, combustible, mano, km, ano, valor, img1, img2, img3, img4, img5, img6, img7, contacto) 
                    VALUES ('$id','$marca','$modelo','$vertion','$equipamiento','$extras','$color','$combustible','$mano','$km','$ano','$valor','$img1','$img2','$img3','$img4','$img5','$img6','$img7','$contacto')";
        $conexion->query($insertar);

        $id = mysqli_insert_id($conexion);
        $carpeta_destino = 'cars/id'. $id .'/';
        // crear carpeta
        if (!file_exists($carpeta_destino)) {
            mkdir($carpeta_destino, 0777, true);
        }
        
        //subiendo la foto
        $archivo_subido = $carpeta_destino . $_FILES['img1']['name'];
        move_uploaded_file($_FILES['img1']['tmp_name'], $archivo_subido);
        $archivo_subido = $carpeta_destino . $_FILES['img2']['name'];
        move_uploaded_file($_FILES['img2']['tmp_name'], $archivo_subido);
        $archivo_subido = $carpeta_destino . $_FILES['img3']['name'];
        move_uploaded_file($_FILES['img3']['tmp_name'], $archivo_subido);
        $archivo_subido = $carpeta_destino . $_FILES['img4']['name'];
        move_uploaded_file($_FILES['img4']['tmp_name'], $archivo_subido);
        $archivo_subido = $carpeta_destino . $_FILES['img5']['name'];
        move_uploaded_file($_FILES['img5']['tmp_name'], $archivo_subido);
        $archivo_subido = $carpeta_destino . $_FILES['img6']['name'];
        move_uploaded_file($_FILES['img6']['tmp_name'], $archivo_subido);
        $archivo_subido = $carpeta_destino . $_FILES['img7']['name'];
        move_uploaded_file($_FILES['img7']['tmp_name'], $archivo_subido);

        header('Location: subir.php');
    } else {
        $error = "El archivo no es una imagen o es muy pesado";
    }

}

require 'vistas/subir.vista.php';

}else {
    header('Location: login.php');
}
?>