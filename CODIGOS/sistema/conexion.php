<?php

class BD{
    private static $instacia=NULL;

    public static function crearInstancia(){

        if(!isset(self::$instacia)){

            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;

            self::$instacia= new PDO('mysql:host=localhost;dbname=educalp','root','', $opcionesPDO);
            
        }
        return self::$instacia;
    }
}
?>