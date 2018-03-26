<?php

namespace designPatterns\structural\decorator;


spl_autoload_register(
    function ($class) {
        $filename = realpath(dirname(dirname(dirname(dirname(__FILE__))))) . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
        include_once($filename);
    });

$person = new Person();
echo $person->dress();

$person = new Person();
$person = new CapWearDecorator($person);
echo $person->dress();

$person = new Person();
$person = new CapWearDecorator($person);
$person = new JaketWearDecorator($person);
echo $person->dress();

$person = new Person();
$person = new CapWearDecorator($person);
$person = new JaketWearDecorator($person);
$person = new BootsWearDecorator($person);
echo $person->dress();