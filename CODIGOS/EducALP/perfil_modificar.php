<?php
include "conexion.php";
session_start();

if(isset($_POST['btn_perfil_modificar'])){

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];


	// codigo para modificar a la BD
	$modificar = Mysqli_query($conexion,"UPDATE `usuarios` SET `nombre` = '$nombre', `apellido` = '$apellido' WHERE `usuarios`.`id_user` = '$id_usuario'; ") or die ($conexion."problemas para modificar");
	
		    // Mensaje tipo alerta
    echo "<script>alert('Actualizacion Exitosa');</script>";
    // Redireccionamos
        echo "<script>window.location='perfil.php';</script>";

}
?>