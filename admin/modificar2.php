<?php 
require 'conexion.php';
// Modificamos los datos en la base de datos
$mod = "UPDATE autos SET 
        marca = '$_REQUEST[marca]',
        modelo = '$_REQUEST[modelo]',
        vertion = '$_REQUEST[vertion]',
        equipamiento = '$_REQUEST[equipamiento]',
        extras = '$_REQUEST[extras]',
        color = '$_REQUEST[color]',
        combustible = '$_REQUEST[combustible]',
        mano = '$_REQUEST[mano]',
        km = '$_REQUEST[km]',
        ano = '$_REQUEST[ano]',
        valor = '$_REQUEST[valor]',
        contacto = '$_REQUEST[contacto]'
        WHERE id = '$_REQUEST[codigo]'";

$modificar = mysqli_query($conexion, $mod);

// agregar o sustituir fotos

$id = $_REQUEST['codigo'];
$carpeta_destino = '../cars/id'. $id .'/';

$img1 = $_FILES['img1']['name'];
$img2 = $_FILES['img2']['name'];
$img3 = $_FILES['img3']['name'];
$img4 = $_FILES['img4']['name'];
$img5 = $_FILES['img5']['name'];
$img6 = $_FILES['img6']['name'];
$img7 = $_FILES['img7']['name'];

if (!empty($img1)) {
    $new = "UPDATE autos SET img1 = '$img1' WHERE id = '$_REQUEST[codigo]'";
    $newFoto = mysqli_query($conexion, $new);
    
    $archivo_subido = $carpeta_destino . $_FILES['img1']['name'];
    move_uploaded_file($_FILES['img1']['tmp_name'], $archivo_subido);       
} 
if (!empty($img2)) {
    $new = "UPDATE autos SET img2 = '$img2' WHERE id = '$_REQUEST[codigo]'";
    $newFoto = mysqli_query($conexion, $new);
    
    $archivo_subido = $carpeta_destino . $_FILES['img2']['name'];
    move_uploaded_file($_FILES['img2']['tmp_name'], $archivo_subido);       
} 
if (!empty($img3)) {
    $new = "UPDATE autos SET img3 = '$img3' WHERE id = '$_REQUEST[codigo]'";
    $newFoto = mysqli_query($conexion, $new);
    
    $archivo_subido = $carpeta_destino . $_FILES['img3']['name'];
    move_uploaded_file($_FILES['img3']['tmp_name'], $archivo_subido);       
} 
if (!empty($img4)) {
    $new = "UPDATE autos SET img4 = '$img4' WHERE id = '$_REQUEST[codigo]'";
    $newFoto = mysqli_query($conexion, $new);
    
    $archivo_subido = $carpeta_destino . $_FILES['img4']['name'];
    move_uploaded_file($_FILES['img4']['tmp_name'], $archivo_subido);       
} 
if (!empty($img5)) {
    $new = "UPDATE autos SET img5 = '$img5' WHERE id = '$_REQUEST[codigo]'";
    $newFoto = mysqli_query($conexion, $new);
    
    $archivo_subido = $carpeta_destino . $_FILES['img5']['name'];
    move_uploaded_file($_FILES['img5']['tmp_name'], $archivo_subido);       
} 
if (!empty($img6)) {
    $new = "UPDATE autos SET img6 = '$img6' WHERE id = '$_REQUEST[codigo]'";
    $newFoto = mysqli_query($conexion, $new);
    
    $archivo_subido = $carpeta_destino . $_FILES['img6']['name'];
    move_uploaded_file($_FILES['img6']['tmp_name'], $archivo_subido);       
} 
if (!empty($img7)) {
    $new = "UPDATE autos SET img7 = '$img7' WHERE id = '$_REQUEST[codigo]'";
    $newFoto = mysqli_query($conexion, $new);
    
    $archivo_subido = $carpeta_destino . $_FILES['img7']['name'];
    move_uploaded_file($_FILES['img7']['tmp_name'], $archivo_subido);       
} 


header ('Location: mantenimiento.php');
?>