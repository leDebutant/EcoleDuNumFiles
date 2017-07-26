<?php

class Connexion
{
    static private $connexion;

    static private function setConnexion()
    {
        if(empty(self::$connexion)){
            self::$connexion = new PDO('mysql:host=localhost;dbname=ikea;charset=UTF8','root','');
            self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
    }

    static public function getConnexion()
    {
        if(empty(self::$connexion) == true){
            self::setConnexion();
            return self::$connexion;
        }
        return self::$connexion;
    }

    private function __construct()
    {

    }
}