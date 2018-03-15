<?php

namespace designPatterns\creational\abstractFactory\GarageFactory;


use designPatterns\creational\abstractFactory\Driver\AbstractDriver;
use designPatterns\creational\abstractFactory\Driver\BoatDriver;
use designPatterns\creational\abstractFactory\Transport\AbstractTransport;
use designPatterns\creational\abstractFactory\Transport\Boat;

class BoatGarage extends AbstractGarageFactory
{

    /**
     * Получаем водителя
     * @return AbstractDriver
     */
    function getDriver(): AbstractDriver
    {
        return new BoatDriver();
    }

    /**
     * Получаем транспорт
     * @return AbstractTransport
     */
    function getTransport(): AbstractTransport
    {
        return new Boat();
    }
}