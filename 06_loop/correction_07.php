<?php

//$array = ["Alain","Eric","Jennifer","Paul"];

// Pour ceux qui ont fini

$array2 = [
    ["Alain"],
    "Eric",
    "Jennifer",
    "Paul",
    ["monIndex"=>"test"]
];

$itemCount = 4;

//$i=0;
//while($i<$itemCount){
//    echo $array[$i] . "<br>";
//    $i++;
//}

//for ($i=0; $i < $itemCount ; $i++) {
//    echo $array[$i] . "<br>";
//}

//foreach($array as $result){
//    echo $result . "<br>";
//}

for ($i=0; $i < $itemCount ; $i++) {
    if(is_array($array2[$i])){
        foreach ($array2[$i] as $a){
            echo $a . "<br>";
        }
    }else{
        echo $array2[$i] . "<br>";
    }
}
