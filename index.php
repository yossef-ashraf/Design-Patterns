<?php 
use Pattern\Builder\Builder;
use Pattern\Factory\Factory\BMWFactory;
use Pattern\Factory\Factory\BENZFactory;
use Pattern\Builder\CarBuilder\BMWBuilder;
use Pattern\Builder\CarBuilder\BENZBuilder;
use Pattern\AbstractFactory\CarsAbstraction;

// require("vendor\autoload.php"); \\ path here not work when use docker

require __DIR__ . '/vendor/autoload.php';


echo "Abstract Factory";
echo "<br>====================================";
echo "<br><br>";


$AbstractFactory = new CarsAbstraction(1000);
echo "Abstract Factory createBenz Method ==>";
print_r($AbstractFactory->createBenz()->price());
echo "<br><br>";
echo "Abstract Factory createBMW Method ==>";
print_r($AbstractFactory->createBMW()->price());

echo "<br><br><br><br>";

echo "Builder";
echo "<br>====================================";
echo "<br><br>";


$BENZBuilder = new Builder(new BENZBuilder);
$BMWBuilder = new Builder(new BMWBuilder);

echo "Builder Benz Model Method ==>";
var_export($BENZBuilder->build());
echo "<br><br>";
echo "Builder BMW Model Method ==>";
var_export($BMWBuilder->build());

echo "<br><br><br><br>";

echo "Factory";
echo "<br>====================================";
echo "<br><br>";
$BENZBuilder = new BENZFactory;
$BMWBuilder = new BMWFactory;

echo "Factory Benz Method ==>";
print_r($BENZBuilder->BuildBrand());
echo "<br><br>";
echo "Factory BMW Method ==>";
print_r($BMWBuilder->BuildBrand());