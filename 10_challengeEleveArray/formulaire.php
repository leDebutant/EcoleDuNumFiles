<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <h1>Vérifions notre élève</h1>
    <?php if(!empty($_GET)):?>
    <?php if($_GET['controle'] == "succes"): ?>
      <div class="alert alert-success">
        <strong>Succès!</strong> Etudiant listés.
      </div>
  <?php elseif($_GET['controle'] == "echec"): ?>
      <div class="alert alert-danger">
        <strong>Attention!</strong> Pas d'étudiant avec ce nom
      </div>
    <?php endif; ?>
  <?php endif; ?>
    <div id="header" class="form">
    <form class="col-xs-4" action="service.php" method="post">
      <br>
      <div class="input-group">
        <input type="text" class="form-control"
        placeholder="Recipient's username" aria-describedby="basic-addon2" name="prenom">
        <span class="input-group-addon" id="basic-addon2"></span>
      </div>
      <br>
      <div class="input-group">
        <input type="text" class="form-control"
        placeholder="Recipient's username" aria-describedby="basic-addon2" name="nom">
        <span class="input-group-addon" id="basic-addon2"></span>
      </div>
      <br>
      <button type="submit" class="btn btn-info">Valider</button>
    </form>
    </div>
  </body>
</html>
