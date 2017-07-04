<?php
// l'option r veut dire lire depuis le debut
$fh = fopen("testfile.txt", 'r') or
die("File does not exist or you lack permission to open it");
//filesize donne la taille du fichier
//donc la longueur de lecture
$text = fread($fh, filesize("testfile.txt"));
fclose($fh);
//Note: on ne voit pas le retour à la ligne avec un navigateur
// click droit, voir code source nous donne les retours
// \r\n
echo $text;




 ?>
