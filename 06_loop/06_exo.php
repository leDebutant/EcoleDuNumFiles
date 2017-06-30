<?php

$multiArray = [
/* 0 */  ["Inglorious","Bastards"], //non associatif
/* 1 */  ["Dominic"], //non associatif
/* 2 */  ["Denis" => "Rodman"], // associatif
/* 3 */  ["Michael" => "Jordan"] // associatif
];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php
        foreach ($multiArray as $array) {
          foreach ($array as $key2 => $value) {
            echo "<li>$key $value</li>";
          }
        }
       ?>
    </ul>
  </body>
</html>
