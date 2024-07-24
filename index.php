<?php 
use Pattern\Builder\Builder;
use Pattern\Clone\Car;
use Pattern\Clone\Engine;
use Pattern\Factory\Factory\BMWFactory;
use Pattern\Factory\Factory\BENZFactory;
use Pattern\Builder\CarBuilder\BMWBuilder;
use Pattern\Builder\CarBuilder\BENZBuilder;
use Pattern\AbstractFactory\CarsAbstraction;
use Pattern\Pool\CarPool;

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


echo "<br><br><br><br>";

echo "Pool";
echo "<br>====================================";
echo "<br><br>";
$CarPool = new CarPool;
$CarPool->rentCar(); $car = $CarPool->rentCar() ; // to put two indexs in busyCar array
echo " Pool rentCar Method ==>";
print_r($car);
echo "<br><br>";
echo " Pool getCountRentCar Method ==>";
print_r($CarPool->getCountRentCar());
echo "<br><br>";
echo " Pool getRentCar Method ==>";
print_r($CarPool->getRentCar());
echo "<br><br>";

echo " Pool rentCar Method ==>";
print_r($CarPool->freeCar($car));
echo "<br><br>";
echo " Pool getCountRentCar Method ==>";
print_r($CarPool->getCountFreeCar());
echo "<br><br>";
echo " Pool getRentCar Method ==>";
print_r($CarPool->getFreeCar());
echo "<br><br>";



echo "<br><br><br><br>";

echo "clone";
echo "<br>====================================";
echo "<br><br>";

$originalEngine = new Engine(150, 200);
echo "Original Car Engine Horsepower: {$originalEngine->horsepower}<br><br><br>";
echo "Original Car Engine fast: {$originalEngine->fast}<br><br><br>";

$originalCar = new Car("Toyota", "Corolla", $originalEngine);

// Surface clone
$shallowClonedCar = clone $originalCar;
// Modify the engine power in the superficially cloned version
$shallowClonedCar->engine->horsepower = 200;
$shallowClonedCar->engine->fast = 400;
// print the results
echo "Shallow Cloned Car Engine Horsepower: {$shallowClonedCar->engine->horsepower}<br><br><br>";
echo "Original Car Engine Horsepower after shallow clone modification: {$originalCar->engine->horsepower}<br><br><br>";
echo "Shallow Cloned Car Engine fast: {$shallowClonedCar->engine->fast}<br><br><br>";
echo "Original Car Engine fast after shallow clone modification: {$originalCar->engine->fast}<br><br><br>";

// deep clone
$deepClonedCar = clone $originalCar;
$deepClonedCar->engine = clone $deepClonedCar->engine;
// Modify the engine power in the deep clone
$deepClonedCar->engine->horsepower = 250;
$deepClonedCar->engine->fast = 700;
// print the results
echo "Deep Cloned Car Engine Horsepower: {$deepClonedCar->engine->horsepower}<br><br><br>";
echo "Original Car Engine Horsepower after deep clone modification: {$originalCar->engine->horsepower}<br><br><br>";
echo "Deep Cloned Car Engine fast: {$deepClonedCar->engine->fast}<br><br><br>";
echo "Original Car Engine fast after deep clone modification: {$originalCar->engine->fast}<br><br><br>";

/*
Results:
Original Car Engine Horsepower: 150

Original Car Engine speed: 200

Shallow Cloned Car Engine Horsepower: 200

Original Car Engine Horsepower after shallow clone modification: 200

Shallow Cloned Car Engine speed: 400

Original Car Engine fast after shallow clone modification: 400

Deep Cloned Car Engine Horsepower: 250

Original Car Engine Horsepower after deep clone modification: 200

Deep Cloned Car Engine speed: 700

Original Car Engine fast after deep clone modification: 400
*/
