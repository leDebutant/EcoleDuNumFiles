<?php

function counter(){
  static $counter=0;
  echo $counter;
  $counter++;
}

counter();
counter();
counter();
counter();

 ?>
