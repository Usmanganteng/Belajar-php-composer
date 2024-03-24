<?php

require_once __DIR__ . '/vendor/autoload.php';

use muhamadldizarilham\src\Customer;

$customer = new \muhamadaldizarilham\belajar\Customer("aldizar");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("lulu") . PHP_EOL;