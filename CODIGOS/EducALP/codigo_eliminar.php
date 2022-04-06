<?php
// Se llama a la conexion de la BD
include "conexion.php";
// Se inicia la sesion con la BD
session_start();

// Verificar acción sobre el boton
if (isset($_POST['btn_eliminar'])){

// Rescatar datos del formulario
	$id_usuario = $_POST['id_user'];

// Codigo para eliminar un usuario de la BD
	$eliminar = mysqli_query($conexion,"DELETE FROM `usuarios` WHERE `usuarios`.`id_user` = $id_usuario ") or die ($conexion."problemas para eliminar");
	
	// mensaje tipo alerta de accion completada
	echo "<script>alert('se elimino el registro');</script>";
	// redireccionamos 
	echo "<script>window.location='consulta_usuario.php';</script>";
}

?>