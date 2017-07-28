<?php

class classA{
    public static $nombre;

    public static function augmenteCompteur()
    {
        self::$nombre++;
        var_dump("augmentation effectuée");
    }
}

//var_dump(ClassA::$nombre);
//ClassA::augmenteCompteur();
//var_dump(ClassA::$nombre);


class classB{
    public $couleur = "vert";

    public function montrerCouleur(){
        var_dump($this->couleur);
    }

    public function changerCouleur(){
        $this->couleur = "rouge";
    }

    public function montrerCouleurDefinitive(){
        var_dump($this->couleur);
    }
}

$objet = new classB();
$objet->changerCouleur();

// Créer une classe User avec des attributs username et email.
// instanciez deux objets et accédez à ces propriétés depuis
// l'extérieur de la classe. Assignez à ces propriétés des
// valeur par defaut. Si vous vous sentez faite un contructeur
// pour assigner des valeurs à ces attributs.
// Ensuite crééz une fonction qui font un var_dump de ces deux
// attributs
// (N UTILISEZ PAS DE METHODE NI D'ATTRIBUTS STATIQUES)

// Si vous avez FINI créer une class Helper
// créer attributs statiques $counteur, $format
// accédez depuis l'extérieur et créez une methode statique
// pour accéder à celle-ci
// ICI pas d'instantiation sera requise!!!


// Exo: BASE de données;
// Créer une classe qui permet de se connecter à une base
// de données.
// créez une méthode pour insérer des users
// pour éditer(modifier) un user
// méthode pour sélectionner tous les users
// méthode pour sécectionner un SEUL user (par id ou username)
// méthode pour effacer un User (un seul)
// METTEZ LA CONNEXION DANS LA CLASSE