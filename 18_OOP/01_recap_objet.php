<?php

/****
 * CONTEXTE: Instance vs Static
 * Une instance est un exemple de la classe et les methodes
 * et attributs statiques sont ont un contexte classe
 *
 * Ils sont différents car une classe est unique dans tout le code
 * des instance il peut y en avoir infini.
 *
 * Donc pour accéder à leur méthodes respectives ceci est très
 * différents.
 *
 * Comment différencier les attributs et méthodes statiques
 * des attributs et méthodes d'instance?? C'est simple les
 * méthodes et attributs Statiques comporte le mot STATIC
 * retenez ça bien!!!
 *
 * STATIC ATTRIBUTS ET METHODES
 * Pour accéder aux méthodes et aux attributs statiques il y a deux cas de figures. Depuis l'extérieur de la classe et depuis l'intérieur
 * Depuis l'extérieur on accède
 * à un attribut NomDeLaClass::$compteur
 * à une méthode NomDeLaClass::maMethodeStatique()
 *
 * Depuis l'intérieur de la classe exactement comme précédemment OU
 * avec self::
 * à un attribut self::$compteur
 * à une méthode self::maMethodeStatique()
 *
 * DEPUIS UNE INSTANCE. Une instance est un example de la classe
 * par conséquent pour accéder à des méthodes et attributs d'une
 * instance on va opérer différemment et deux cas de figures encore
 * Depuis l'exterieur de l'instance et depuis l'intérieur
 *
 * A L'EXTERIEUR
 * //Ici il nous faut l'existence d'une instance au préalable
 * $instanceDeUser = new User();
 * // ensuite pour avoir accès à
 *  un attribut $instanceDeUser->username;
 *  une méthode $instanceDeUser->methodeInstance()
 *
 * depuis l'intérieur
 *  un attribut $this->username;
 *  une méthode $this->methodeInstance()
 *
 */

class Fromage
{
    public $odeur = "mauvais";
    public $gout = "très mauvais";
    public $couleur = "noir";
    public $poid = "3kg";
    public static $compteur;


    public function myMethod(){
        var_dump($this->gout);
        $this->insideMethod();
    }

    public function insideMethod(){

    }

    public static function methodeStatique(){

    }

    /***
     * Fromage constructor. IL EST APPELÉ À chaque fois
     * que la classe est instanciée!!!!
     */
    public function __construct()
    {
        echo "Ma classe est instanciée";
    }
}

Fromage::methodeStatique();

/***
 * Important: pour accéder à un attribut depuis l'extérieur
 * de la classe il faut utiliser la variable objet qui est en
 * fait une instance de la classe.
 * L'instance est un exemple de la classe. ici ça sera $fromageInstance.
 */
//$fromageInstance = new Fromage();
//
//var_dump($fromageInstance->gout);
//$fromageInstance->myMethod();

/***
 * La classe en elle-même peut avoir des attributs et des methods
 * qui correpondent à la classe et NON à une instance on les reconnait par le mot "static" IMPORTANT!!
 */

class Pain
{
    public static $counter=0;
    public static $poid = "150grs";

    public function __construct()
    {
        self::$counter++;
    }

    public static function commanderPain()
    {
        var_dump("methode Statique");
    }

    public static function montrerAttributStatic()
    {
        /**
         * Appel à un attribut static à l'intérieur de la
         * classe soit Pain::$counter ou self::$counter
         * C'est équivalent
         */
        var_dump(Pain::$counter);
        var_dump(self::$counter);
        /**
         * Dans la classe on peut également accéder à une méthode
         * statiques et comme précédemment on a le choix
         */
        Pain::commanderPain();
        self::commanderPain();
    }

}

/**
 * Depuis l'extérieur on peut accéder à une attributs static
 * avec
 */
//var_dump(Pain::$counter);
/**
 * Ici Pain::commanderPain(); on accède à la méthode statique
 */
//Pain::commanderPain();
//echo Pain::montrerAttributStatic();


$pain1 = new Pain();
$pain2 = new Pain();

var_dump(Pain::$counter);

