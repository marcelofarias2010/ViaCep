<?php

require_once './vendor/autoload.php';

use Wead\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipcode('72220120');

var_dump($resultado);
