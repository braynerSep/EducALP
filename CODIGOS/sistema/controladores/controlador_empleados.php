<?php

include_once("modelos/empleado.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorEmpleados{

    public function inicio(){

        $usuario=Empleado::consultar();

        include_once("vistas/empleados/inicio.php");


    }
    public function crear(){

        if($_POST){
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $documento=$_POST['documento'];
            $clave_us=$_POST['clave_us'];
            
            Empleado::crear($nombre,$apellido,$documento,$clave_us);
            header("location:./?controlador=empleados&accion=inicio");
        }

        include_once("vistas/empleados/crear.php");

    }
    public function editar(){




        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $documento=$_POST['documento'];
            $clave_us=$_POST['clave_us'];
            print_r($_POST);

            Empleado::editar($id,$nombre,$apellido,$documento,$clave_us);
            header("location:./?controlador=empleados&accion=inicio");

        }
        $id=$_GET['id'];

        $usuario=(Empleado::buscar($id));

 

        include_once("vistas/empleados/editar.php");

    }
    public function borrar(){
        print_r($_GET);

            $id=$_GET['id'];

            Empleado::borrar($id);
            header("location:./?controlador=empleados&accion=inicio");
    }


}

?>