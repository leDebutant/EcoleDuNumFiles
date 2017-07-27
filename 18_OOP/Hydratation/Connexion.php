<?php

class Connexion
{
    static private $connexion;

    /***
     * @return PDO
     * SINGLETON DESIGN PATTERN: On s'assure qu'une seule connexion
     * pdo existe pour cette base de données.
     */

    static public function getConnexion()
    {
        if(empty(self::$connexion)){
            self::$connexion = new PDO('mysql:host=localhost;dbname=ikea;charset=UTF8','root','');
            self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        return self::$connexion;
    }



    private function __construct()
    {
    }
}