<?php

class Empleado{

    public $id_user;
    public $nombre;
    public $apellido;
    public $documento;
    public $clave_us;
    public function __construct($id_user, $nombre, $apellido, $documento, $clave_us){
        $this->id_user=$id_user;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->documento=$documento;
        $this->clase_us=$clave_us;
        
    }
    public static function consultar(){
        $listaUsuarios=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM usuarios");

        foreach($sql->fetchAll() as $usuario){

            $listaUsuarios[]=new Empleado($usuario['id_user'],$usuario['nombre'],$usuario['apellido'],$usuario['documento'],$usuario['clave_us']);
        }
        return $listaUsuarios;
    }

    public static function crear($nombre,$apellido,$documento,$clave_us ){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("INSERT INTO usuarios(nombre,apellido,documento,clave_us ) VALUES (?,?,?,?)");
        $sql->execute(array($nombre,$apellido,$documento,$clave_us));



    }
    public static function borrar($id_user){
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("DELETE FROM usuarios WHERE id_user=?");
        $sql->execute(array($id_user));

    }
    public static function buscar($id_user){
        $conexionBD=BD::crearInstancia();

        $sql=$conexionBD->prepare("SELECT * FROM usuarios WHERE id_user=?");
        $sql->execute(array($id_user));
        $usuario=$sql->fetch();
        return new Empleado($usuario['id_user'],$usuario['nombre'],$usuario['apellido'],$usuario['documento'],$usuario['clave_us']);

    }
    public static function editar($id_user ,$nombre ,$apellido ,$documento ,$clave_us ){

        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->prepare("UPDATE usuarios SET nombre=?, apellido=?, documento=?, clave_us=? WHERE id_user=?");
        $sql->execute(array($nombre,$apellido,$documento,$clave_us,$id_user));

    }

}












