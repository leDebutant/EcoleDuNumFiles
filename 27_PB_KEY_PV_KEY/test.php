<?php

$json = file_get_contents('https://api.coinmarketcap.com/v1/ticker/bitcoin/');

$decode = json_decode($json);

var_dump($decode[0]->id);