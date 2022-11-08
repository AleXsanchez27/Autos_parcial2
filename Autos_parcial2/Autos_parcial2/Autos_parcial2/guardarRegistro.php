<?php

    include 'conexion.php';

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $marca = $_POST["marca"];
    $año = $_POST["año"];
    $velocidad = $_POST["velocidad"];
    $rodado = $_POST["rodado"];
    

    $sql = "UPDATE autos SET nombre='".$nombre."' , marca= '".$marca."',". 
    "año = '".$año."', velocidad = '".$velocidad."', rodado ='".$rodado."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";

    }

    $conexion->close();

?>