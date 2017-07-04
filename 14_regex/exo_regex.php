<?php


if (preg_match("#([0-9]{2}(.|-|\/)?){5}#", "06.98.02.57.82")):
    echo 'trouve';
else:
    echo 'ne trouve pas';
endif;

 ?>
