<?php
include "conexion.php";
session_start();

if(isset($_POST['btn_modificar_usuario'])){

	$id_usuario = $_POST['id_user'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$documento = $_POST['documento'];

	// codigo para modificar a la BD
	$modificar = Mysqli_query($conexion,"UPDATE `usuarios` SET `nombre` = '$nombre', `apellido` = '$apellido', `documento` = '$documento' WHERE `usuarios`.`id_user` = '$id_usuario'; ") or die ($conexion."problemas para modificar");
	
		    // Mensaje tipo alerta
    echo "<script>alert('Actualizacion Exitosa');</script>";
    // Redireccionamos
        echo "<script>window.location='consulta_usuario.php';</script>";

}
?>