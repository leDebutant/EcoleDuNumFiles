<?php

include("functions.php");

$students = getAllStudents();

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
        <form method="post" action="databaseService.php">
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