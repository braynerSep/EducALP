<?php
// Se inicia la sesion con la BD 
session_start();
// Se llama a la conexion de la BD
include 'conexion.php';

// Variables para llamar al atributo por buscar usuario  
$buscar = $_POST['buscar'];

// Codigo para buscar los atributos de la tabla usuario
$SQL_READ = "SELECT * FROM usuarios WHERE nombre LIKE '%".$buscar."%' OR apellido LIKE '%".$buscar."%' OR documento LIKE '%".$buscar."%' ";
// verificar la conexion de la BD y la consulta
$SQL_QUERY =  mysqli_query($conexion,$SQL_READ);

?>