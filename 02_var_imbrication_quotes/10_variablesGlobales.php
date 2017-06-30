<?php

$GLOBALS['a'] = 12;

function definiGlobVar()
{
    $GLOBALS['name']="fred";
	echo $GLOBALS['a'];//12
  // LES VARIABLES GLOBALES SONT ACCESSIBLES DE PARTOUT
  // C'EST POUR ÇA QU'IL FAUT UN PEU LES ÉVITER
  // CAR ON FINI PAR NE PAS SAVOIR OU ELLES SONT DÉFINIES
  // === CASSE TÊTE
}

function maFonction(){
  $a="Alfonso"; //VARIABLE Locale
          // ON Y A PAS ACCES DE L'EXTERIEUR
}
definiGlobVar();

echo $GLOBALS['name'];



 ?>
