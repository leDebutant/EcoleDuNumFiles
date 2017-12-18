<?php

/**
 * Pour déclarer un nom d'espace
 * Normalement un nom d'espace est déclaré par fichier
 * Sinon on utilise les crochets
 * Attention:En dehors de ces namespace déclaré il y a le namespace global.
 */

include 'idemLibrary.php';
include 'myLibrary.php';
include 'Helpers/Helpers.php';
include 'Session/Session.php';

/**
 * Dans ce "use" le premier Helpers représente le namespace le deuxième est le nom de la classe!!
 * Par convention PS-4 les namespace collent avec le chemin d'accès des dossiers. Mais il peut strictement être dissocier par exemple ici
 */
use Helpers\Helpers as Jerem;
use Giraffe\Testing\Alfonso\Session as Sess;

Jerem::testing();
Sess::myStaticMethod();

$session = new Sess();
$session->defaultMethod();

//Appel croisé -> appel d'une classe à une autre
Jerem::otherNameSpace();

//use myLibrary;
//use myLibrary;

//myLibrary\ClassA::myMethod();
//de la même façon pour instantier une classe d'un autre namespace on aurait fait:
//$classA = new myLibrary\ClassA();


//idemLibrary\myMethod();
//

//print(strlen("test"));