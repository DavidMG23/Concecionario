<?php session_start(); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = '';
    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= 'Por favor complete los datos correctamente.'; 
    } else {
        require 'admin/conexion.php';
        $consulta = "SELECT * FROM usuarios WHERE nombre = '$usuario'";
        $resultado = mysqli_query($conexion, $consulta);
        $val=0;
        while ($res = mysqli_fetch_object($resultado)) {
            if ($res->nombre == $usuario) {
                $val=1; //existe usuario
            }
        }
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);
        if ($val == 0) {
            if ($password == $password2) {
                $insertar = "INSERT INTO usuarios (id, nombre, pass) VALUES (null, '$usuario', '$password')";
                $agregar = mysqli_query($conexion, $insertar);
                header ('Location: login.php');
            } else {
                $errores .= 'Las contraseñas no son iguales.';
            }
        } else {
            $errores .= 'El nombre de usuario ya existe.';
        }
    }
}
require 'vistas/registro.vista.php';
?>