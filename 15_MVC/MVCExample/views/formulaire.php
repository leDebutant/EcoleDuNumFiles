<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FORMULAIRE</title>
  </head>
  <body>
      <h1>FORMULAIRE</h1>
      <form method="post" action="services/formService.php">
        <label>my form</form>
          <br>
        <input name="username" type="text" />
        <input type="submit" value="valider" />
      </form>
      <br>
      <?php if($feedback == "success"): ?>
          Succès!!!!
      <?php endif ?>
      <br>
      Nombre utilisateurs: <?php echo $nombreUtilisateur ?>
  </body>
</html>
