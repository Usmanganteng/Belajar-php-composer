<?php

require_once __DIR__ . "/vendor/autoload.php";

use MuhamadAldizarIlham\Data\People;

$people = new People("lucian");

echo $people->sayHello("Aldizar") . PHP_EOL;