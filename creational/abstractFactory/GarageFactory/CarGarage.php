<?php

namespace designPatterns\creational\abstractFactory\GarageFactory;


use designPatterns\creational\abstractFactory\Driver\AbstractDriver;
use designPatterns\creational\abstractFactory\Driver\CarDriver;
use designPatterns\creational\abstractFactory\Transport\AbstractTransport;
use designPatterns\creational\abstractFactory\Transport\Car;

class CarGarage extends AbstractGarageFactory
{

    /**
     * Получаем водителя
     * @return AbstractDriver
     */
    function getDriver(): AbstractDriver
    {
        return new CarDriver();
    }

    /**
     * Получаем транспорт
     * @return AbstractTransport
     */
    function getTransport(): AbstractTransport
    {
        return new Car();
    }
}