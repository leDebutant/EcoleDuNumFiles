<?php
$fh = fopen("testfile.txt", 'r') or
die("File does not exist or you lack permission to open it");
// fgets ne lit que la premiere ligne
// $line = fgets($fh);

// fread() lit le fichier entier mais il faut lui donner la
// longeur du fichier avec filesize()
$taille = filesize("testfile.txt");
$docRead = fread($fh,$taille);
fclose($fh);

// var_dump($docRead);
// die();

// explode nous permet d'éclater le texte avec les espaces
// comme séparateur (param 1)
$user = explode(" ",$line);

// On aurait pu faire un foreach...
// On prend le mot de passe et on compare
if(trim($user[1]) == '52163'){
    echo 'le password est correct';
}else{
    echo 'le password est incorrect';
}
var_dump($user[1]);
var_dump($user);
die();
