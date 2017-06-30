<?php
//header('Content-Type: text/html; charset=utf8');
$input = "
<p>Salut, vous!
<script>alert('Trop tard hahaha!');</script>.
<a href='http://www.lidem.eu'>Amélliorez vos compétences</a>.";

// echo $input;

echo strip_tags($input, '<p><a>'); //strip tags gardera les tags
                                  // qu'on lui indiquera en paramètre
