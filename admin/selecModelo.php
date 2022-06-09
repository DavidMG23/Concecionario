<?php
    require 'conexion.php';
	
	$id_marca = $_POST['ID_Dpto'];


	$modelo = "SELECT * FROM modelos WHERE id_marca = '$id_marca' ORDER BY modelo";
	$modelos = mysqli_query($conexion, $modelo);
	
    $html= "<option value=''>Seleccionar Modelo</option>";
	
	while($opcion = $modelos->fetch_assoc()){
		$html .= "<option value='".$opcion['modelo']."'>".$opcion['modelo']."</option>";
	}
    
	echo $html;
?>	