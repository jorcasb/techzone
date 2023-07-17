<?php 

	include ("../conexion.php");

	$nombre = $_POST['nombre'];
	$categoria = $_POST['categoria'];
	$producto = $_POST['producto'];
	$descripcion = $_POST['descripcion'];
	
    $fecha = date("y/m/d");

	$sql = "INSERT INTO productos(
		nombre,CategoriaId,InfoId,descripcion,fecha)
		VALUES('$nombre','$categoria','$producto','$descripcion','$fecha')";

	$resultado = mysqli_query($conexion, $sql);

	if ($resultado === TRUE) {
		header("location:../get-a-quote.php");
	} else {
		echo "Datos NO insertados";
	}

 ?>