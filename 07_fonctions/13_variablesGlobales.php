<?php

/**
 * En fait PHP contient déjà plusieurs variables globales qui ont des informations importantes sur le système
 * Elles sont structurées en tableau associatifs on le reverra plus amplement un peu plus tard.
 *
 *   $GLOBALS   Toutes les variables sont définies dans le scope/étendue globale du script. Les variables sont nommées en tant que clés d'un tableau(array)
 *   $_SERVER   Contient des information sur les headers(en tête), paths(chemin fichiers), et script de localisation. Les entrées sont créées par le serveur et il n'y a pas de garantie que tout les serveur créé ceci
 *   $_GET      Variables passées au script via HTTP GET.
 *   $_POST     Variables passées au script via  HTTP POST.
 *   $_FILES    objets/fichiers passés via HTTP POST.
 *   $_COOKIE   Variables passées via HTTP cookies.
 *   $_SESSION  Session variables disponible pour le script courrant.
 *   $_REQUEST  Contient des informations du navigateur par défaut $_GET, $_POST, et $_COOKIE.
 *   $_ENV      Variables passées dans le script courrant via la methode environment. // On le verra plus tard
 */
