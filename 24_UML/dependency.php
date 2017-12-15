<?php
/**
 * Dependence: lien entre une classe et une autre appelée en static
 */

class Connexion
{
    public static function tabernacle()
    {

    }
}

class BddManager{

    public function __construct()
    {
        Connexion::tabernacle();
    }
}