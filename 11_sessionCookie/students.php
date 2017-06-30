<?php
session_start();
header('Content-Type: text/html; charset=UTF8');

if(!isset($_SESSION['etudiants'])){
  //on défini la session en tant que tableau
  //dans le cas ou elle n'existe pas
  $_SESSION['etudiants']=array();
}

if(!empty($_POST)){
  $_SESSION['etudiants'][]=$_POST;
}

if(!empty($_SESSION['etudiants'])){
  $students = $_SESSION['etudiants'];
}
?>
    <html>
      <head>
        <title>Enregistrement Etudiants</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
      </head>
      <body>
        <h1>Formulaire enregistrement étudiants</h1>
        <h2>Liste d'étudiants</h2>
        <?php if (!empty($students)): ?>
          <table>
            <thead>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Age</th>
              <th>Email</th>
              <th>Langue</th>
            </thead>
            <tbody>
              <?php foreach($students as $s): ?>
              <tr>
                <td><?=$s['prenom']?></td>
                <td><?=$s['nom']?></td>
                <td><?=$s['age']?></td>
                <td><?=$s['email']?></td>
                <td><?=$s['langue']?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
            <p>Il n'y a pas d'étudiants enregistrés</p>
        <?php endif; ?>
        <h1>Formulaire</h1>
        <form method="post" action="students.php">
          <pre>
            prenom  <input type="text" name="prenom" />
            nom     <input type="text" name="nom" />
            age     <input type="text" name="age" />
            email   <input type="text" name="email" />
            langue  <input type="text" name="langue" />
            <input type="submit" name="envoyer" />
          </pre>
        </form>
      </body>
    </html>