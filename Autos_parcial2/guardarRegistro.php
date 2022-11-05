<?php

    include 'conexion.php';
   
    
    $Marca = $_POST["Marca"];
    $Modelo = $_POST["Modelo"];
    $Año = $_POST["Año"];
    $Velocidad = $_POST["Velocidad"];
    $Rodado = $_POST["Rodado"];

    $sql = "INSERT INTO autos (marca, modelo, año, velocidad, rodado)" . 
    "VALUE ('".$Marca."', '".$Modelo."', '".$Año."', '".$Velocidad."', '".$Rodado."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: " .$sql. "<br>" .$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }
    $conexion->close();
?>