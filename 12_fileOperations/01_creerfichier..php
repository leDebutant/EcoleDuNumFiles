<?php
/** Correspond aux options d'écriture/lecture du fichier
'r' Read from file start Open for reading only; place the file pointer at the beginning of the file.
'r+' Read from file start and allow writing
'w'  Write from file start and truncate file
'w+' Write from file start, truncate file, and allow reading if the file doesn’t already exist.
Open for reading and writing; place the file pointer at the beginning of the file. Return
FALSE if the file doesn’t already exist.
Open for writing only; place the file pointer at the beginning of the file and truncate the
file to zero length. If the file doesn’t exist, attempt to create it.
Open for reading and writing; place the file pointer at the beginning of the file and
truncate the file to zero length. If the file doesn’t exist, attempt to create it.
'a' Append to file end Open for writing only; place the file pointer at the end of the file. If the file doesn’t exist,
attempt to create it.
'a+' Append to file end and allow reading
Open for reading and writing; place the file pointer at the end of the file. If the file
doesn’t exist, attempt to create it.
 */
// On utilise fopen pour creer un fichier
$fh = fopen("testfile.txt", 'w') or die("Failed to create file");
$text = <<<_WRITE
Line 1
Line 2
Line 3
_WRITE;
// On y injecte le contenu avec fwrite
fwrite($fh, $text) or die("Could not write to file");
// et on le ferme.
fclose($fh);
echo "File 'testfile.txt' written successfully";

 ?>
