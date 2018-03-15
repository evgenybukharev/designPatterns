<?php

namespace designPatterns\behavioral\strategy;


spl_autoload_register(
    function ($class) {
        $filename = realpath(dirname(dirname(dirname(dirname(__FILE__))))) . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
        include_once($filename);
    });

$weaponArray = [new MaceWeapon(), new PistolWeapon(), new KnifeWeapon()];
$weaponKey = array_rand($weaponArray, 1);
$weapon = $weaponArray[$weaponKey];

$character = new Character($weapon);
echo $character->useWeapon() . PHP_EOL;
