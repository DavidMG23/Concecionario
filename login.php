<?php session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: subir.php');
} 
$errores = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $pass = $_POST['password'];
    $pass = hash('sha512', $pass);

    
    require 'admin/conexion.php';

    $consulta = ("SELECT * FROM usuarios WHERE nombre = '$usuario'");
    $resultado = mysqli_query($conexion, $consulta);
    $sesion = mysqli_fetch_array($resultado);

    if ($pass === $sesion['pass']) {
        $_SESSION['usuario'] = $usuario;
        header ("Location: subir.php");
    } else {
        $errores = 'Datos Incorrectos';
    }
}
require 'vistas/login.vista.php';

?>