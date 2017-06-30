<?php

if(isset($_GET['numero'])){
        $var = $_GET['numero'];
        var_dump($var);
}
if(isset($_GET['commerce']))
{
    $var2 = $_GET['commerce'];
    var_dump($var2);
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Passage de paramètre à travers l'URL</title>
</head>
<body>
<h1>Passage de paramètre à travers l'URL</h1>
<p>
    <a href="<?= $_SERVER['PHP_SELF']?>?numero=455&commerce=1">
      passer les données
    </a>
</p>

</body>
</html>
