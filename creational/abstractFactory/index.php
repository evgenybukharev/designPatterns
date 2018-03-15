<?php

namespace designPatterns\creational\abstractFactory;

use function array_rand;
use designPatterns\creational\abstractFactory\GarageFactory\AirplaneGarage;
use designPatterns\creational\abstractFactory\GarageFactory\BoatGarage;
use designPatterns\creational\abstractFactory\GarageFactory\CarGarage;
use const PHP_EOL;

spl_autoload_register(
    function ($class) {
        $filename = realpath(dirname(dirname(dirname(dirname(__FILE__))))) . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
        include_once($filename);
    });

$carGarage = new CarGarage();
$airPlaneGarage = new AirplaneGarage();
$boatGarage = new BoatGarage();
$garageArray = [$carGarage, $airPlaneGarage, $boatGarage];
$garageKey = array_rand($garageArray, 1);
$garage = $garageArray[$garageKey];

$driver = $garage->getDriver();
$transport = $garage->getTransport();

echo $driver->getName() . PHP_EOL;
echo $driver->getTransportType() . PHP_EOL;
echo $driver->getAge() . PHP_EOL;
echo $driver->getExperience() . PHP_EOL;

echo $transport->getBrand() . PHP_EOL;
echo $transport->getSpeed() . PHP_EOL;
echo $transport->getPassengerCount() . PHP_EOL;