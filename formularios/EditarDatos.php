<?php
    include("../conexion.php");

    $Id = $_POST["Id"];
    $Nombre = $_POST["Nombre"];
    $Categorias = $_POST["Categorias"];
    $Info = $_POST["Info"];
    $Descripcion = $_POST["Descripcion"];

    $fecha = date("d/m/y");

    $sql = "UPDATE productos SET nombre = '".$Nombre."',CategoriaId = '".$Categorias."', InfoId = '".$Info."', descripcion = '".$Descripcion."', fecha = '".$fecha."' WHERE id = '".$Id."'";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: ../get-a-quote.php");
    } else {
        echo "Datos no actualizados";
    }
?>