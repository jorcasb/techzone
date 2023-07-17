<?php 

	include ("../conexion.php");

	$Id = $_GET['Id'];
	$sql = "DELETE FROM productos WHERE id = '$Id'";

	$query = mysqli_query($conexion,$sql);

	if ($query === TRUE) {
		header("location: ../get-a-quote.php");
	}

 ?>