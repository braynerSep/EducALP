<?php
    include("conexion.php");

//variables.

    $nombre = $_POST['nombre'];

    // el "addslashes" es el methodo para guardar imagenes.
    $Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name'])); //"file_get_contents" es para que en la base de datos se guarde en bits.

    $query = "INSERT INTO tabla_imagen(nombre,imagen) VALUES('$nombre','$Imagen')"; //variable para insertar en la BD.

    $resultado = $conexion->query($query); //almacena el nombre y la imagen en la BD.

    if($resultado){ // if para comparar si se inserta o no.
        header("location: mostrar.php");
    }
    else{
        echo "no se inserto";
    }
?>