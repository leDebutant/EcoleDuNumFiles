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

use Helpers\Helpers;

Helpers::testing();
//use myLibrary;
//use myLibrary;

//myLibrary\ClassA::myMethod();
//de la même façon pour instantier une classe d'un autre namespace on aurait fait:
//$classA = new myLibrary\ClassA();


//idemLibrary\myMethod();
//

//print(strlen("test"));