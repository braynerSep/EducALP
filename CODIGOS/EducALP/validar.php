<?php
// Se inicia la sesion con la BD 
session_start();
// Se llama a la conexion de la BD
include 'conexion.php';

// Condicional para vereficar que se presione el boton
if(isset($_POST['boton'])){  
// Variables para llamar los atributos de la BD   
$documento=$_POST['documento'];
$clave= $_POST['clave_us'];
// Encriptación de la clave
$pass=md5($clave);
// Codigo para verificar que la contraseña sea valida y se encuentre en la BD 
$consulta="SELECT * FROM `usuarios` WHERE `documento` = $documento AND `clave_us` = '$pass'";
// verificar la conexion de la BD y la consulta
$resultado=mysqli_query($conexion, $consulta);
// llamado de las filas de los atributos
$filas=mysqli_num_rows($resultado);

echo $filas;
// condicional para verificar que se encuentre algun usuario registrado
if($filas>0) {
    while($row=mysqli_fetch_array($resultado)){
    $_SESSION['id']=$row['id_user'];
    $_SESSION['nombre']=$row['nombre'];
    $_SESSION['apellido']=$row['apellido'];
    }
    header('location:muro.php');
}else{
    header('location: iniciosesion.php');
}
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>