<?php

$array= array(1,2,3,4);
$array2 = array(256,257,258,259);

// comme en javascript.. ici les tableaux sont passés
// par référence. Rappelez-vous comme dans sort()...
// ATTENTION le push considère $array2 comme un seul
// paramètre
// array_push($array,$array2);

// !! Il faut que les deux tableaux aient un nombre
// égale d'éléments ( on rajoute 259 au deuxième)
// les valeurs du premier tableaux serviront de clés
// les valeurs du deuxième serviront de valeurs
// $result = array_combine($array, $array2);


//Avec Array_merge les tableaux sont fusionés
// pour n'en faire qu'un. Différent d'un push!
// $result = array_merge($array,$array2);

/* RECHERCHE DE VALEURS dans un TABLEAU */
$names = ['prof' => 'Alfonso','eleve'=>'Yan'];
//ceci sera égale a vrai, faux si non trouvé
// ceci recherche par clé
// $result = array_key_exists("prof", $names);

// Cette fonction recherchera parmis les valeurs
// $result = in_array("Alfonso", $names);

// Celui-ci renverra la clé (Nom si associatif)
// $result = array_search("Alfonso", $names);
var_dump($result);



 ?>
