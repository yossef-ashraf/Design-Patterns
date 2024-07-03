<?php 
use Pattern\AbstractFactory\CarsAbstraction;

// require("vendor\autoload.php"); \\ path here not work when use docker

require __DIR__ . '/vendor/autoload.php';


$AbstractFactory = new CarsAbstraction(1000);

echo "Abstract Factory createBenz method ==>";
print_r($AbstractFactory->createBenz()->price());
echo "<br><br>";
echo "Abstract Factory createBMW method ==>";
print_r($AbstractFactory->createBMW()->price());
