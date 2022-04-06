<?php

    $conexion = new mysqli("localhost","root", "", "educalpp");

    if($conexion){
        //echo "conexion exitosa";
    }
    else{
        echo "conexion fallida";
    }

?>