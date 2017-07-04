<?php
//Mettre à jours un fichier
$fh   = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);
// zero indique le déplacement du pointeur
//après la fin du fichier(en nombre de caractères)
//qui est donné par SEEK_END
fseek($fh, 0, SEEK_END);
// "du texte" sera rajouté au fichier
fwrite($fh, "\rdu texte") or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' successfully updated";
