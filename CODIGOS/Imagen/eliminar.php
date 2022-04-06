<?php
    include("conexion.php");

//variables.
    $id_imagen = $_REQUEST['id_imagen'];

    $query = "DELETE FROM tabla_imagen WHERE id_imagen='$id_imagen'"; //variable para insertar en la BD.

    $resultado = $conexion->query($query); //almacena el nombre y la imagen en la BD.

    if($resultado){ // if para comparar si se inserta o no.
        //echo "si se elimino";
       header("location: mostrar.php");
    }
    else{
        echo "no se modifico";
    }
?>