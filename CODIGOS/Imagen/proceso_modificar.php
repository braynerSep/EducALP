<?php
    include("conexion.php");

//variables.
    $id_imagen = $_REQUEST['id_imagen'];

    $nombre = $_POST['nombre'];

    // el "addslashes" es el methodo para guardar imagenes.
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name'])); //"file_get_contents" es para que en la base de datos se guarde en bits.

    $query = "UPDATE tabla_imagen SET nombre='$nombre', Imagen='$Imagen' WHERE id_imagen='$id_imagen'"; //variable para insertar en la BD.

    $resultado = $conexion->query($query); //almacena el nombre y la imagen en la BD.

    if($resultado){ // if para comparar si se inserta o no.
        //echo "si se modifico";
       header("location: mostrar.php");
    }
    else{
        echo "no se modifico";
    }
?>