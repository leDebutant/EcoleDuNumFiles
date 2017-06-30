<?php
// afficher les valeurs avec foreach
// afficher les valeurs avec un while
// afficher les valeurs avec un for

$array = ["Alain","Eric","Jennifer","Paul"];

// Pour ceux qui ont fini

$array = [
  "Alain",
  "Eric",
  "Jennifer",
  "Paul",
  ["monIndex"=>"test"]
];

$itemCount = 4 // Vous pouviez également
// utiliser une fonction count ici

$i=0;
while($i<$itemCount){
   echo $array[$i] . "<br>";
   $i++;
}

for ($i=0; $i < $itemCount ; $i++) {
   echo $array[$i] . "<br>";
}


foreach($array as $result){
   echo $result . "<br>";
}

// Ça c'est pour le petit b)
for ($i=0; $i < $itemCount ; $i++) {
    if(is_array($array2[$i])){
        foreach ($array2[$i] as $a){
            echo $a . "<br>";
        }
    } else {
        echo $array2[$i] . "<br>";
    }
}

 ?>
