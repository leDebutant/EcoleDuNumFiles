<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Utilisation de Boucles</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Table de Multiplication</h1>
<table>
  // code ici
  // Premiere ligne dans mon cas elle a des style différents
  <?php 
  for ($col = 1; $col <= 12; $col++) :
    echo "<th>$col</th>";
  endfor;

  // Créer les lignes restantes, elles sont toutes entre
  // des <tr>
  for ($row = 1, $col = 1; $row <= 12; $row++) :
      echo '<tr>';
      //Dans mon cas la premiere
      // colonne est différente
      if ($col == 1) {
          echo "<th>$row</th>";
      }
      //Une fois la première colonne générée il faut
      // S'occuper des td qui sont les données
      while ($col <= 12) {
          echo '<td>' . $row * $col++ . '</td>';
      }
//        for($col=1;$col<=12;$col++){
//            echo '<td>' . $row * $col . '</td>';
//        }
      echo '</tr>';
      // Reseter $col à la fin de chaque ligne pour la boucle while
      $col = 1;
  endfor;


   ?>
</table>
</body>
</html>
