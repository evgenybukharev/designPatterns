<?php

namespace designPatterns\behavioral\observer;


spl_autoload_register(
    function ($class) {
        $filename = realpath(dirname(dirname(dirname(dirname(__FILE__))))) . DIRECTORY_SEPARATOR . str_replace('\\', '/', $class) . '.php';
        include_once($filename);
    });

$shop = new Shop();
$customerOne=new Customer($shop,'Иван');
$customerTwo=new Customer($shop,'Петр');
$customerThree=new Customer($shop,'Михаил');

$shop->notify();

$shop->detach($customerThree);

$shop->notify();
