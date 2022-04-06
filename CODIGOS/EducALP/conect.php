<?php
// Se inicia la sesion con la BD 
session_start();

// Se llama a la conexion de la BD
include "conexion.php";

// Condicional para vereficar que se presione el boton
if (isset($_POST['boton'])){

// Variables para llamar los atributos de la BD    
$clave = $_POST['clave_us'];
$clave2 = $_POST['clave2'];
// condicional para verificar que las 2 contraseñas sean iguales
    if ($clave == $clave2){
// Variables para llamar los atributos de la BD 
        $documento = $_POST['documento'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $clave = $_POST['clave_us'];
// Encriptación de la clave
    $pass=md5($clave);

        
// Codigo para validar los datos insertados por el usuario y/o si presenta algun problema con el registro
  $registro=mysqli_query($conexion,"INSERT INTO usuarios (documento, nombre, apellido, clave_us) VALUES ($documento,'$nombre','$apellido','$pass')") or die ($conexion."Problemas");

// Mensaje alerta de que el registro fue exitoso
        echo "<script>alert('Registro Exitoso');</script>";
        echo "<script>window.location='iniciosesion.php';</script>";
        
    }else{
// Mensaje alerta de que las contraseñas no son iguales
        echo "<script>alert('Las contraseñas no son iguales');</script>";
        echo "<script>window.location='registro.php';</script>";
        
    }
}
?>