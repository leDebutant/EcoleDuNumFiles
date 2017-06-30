<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    /* avec include le fichier peut pas exister
    et seulement un warning sera soulevé.
    Warning: le code suivant le warning continue
    à s'executer
     */
    <?php include_once("header.php") ?>
    <?php include_once("header.php") ?>
    <?php include_once("header.php") ?>

    <div class="">
      Ceci est le corps du texte
    </div>

    /*
    Le require exige absolument l'existence
    du fichier appelé.
    Si ce n'est pas le cas un erreur fatale sera
    soulevée.
    Erreur fatale: Le code suivant cette erreur
    ne sera pas exécuté.
    */

    <?php require_once("footer.php") ?>
    <?php require_once("footer.php") ?>
  </body>
</html>
