<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $Marca = $_POST["Marca"];
    $Modelo = $_POST["Modelo"];
    $Año = $_POST["Año"];
    $Velocidad = $_POST["Velocidad"];
    $Rodado = $_POST["Rodado"];

    $sql = "UPDATE autos SET Marca='".$Marca."' , Modelo= ".$Modelo.",". 
    "Año = '".$Año."', Velocidad = '".$Velocidad."', Rodado ='".$Rodado."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito oiga <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>