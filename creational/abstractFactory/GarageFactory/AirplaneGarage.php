<?php

namespace designPatterns\creational\abstractFactory\GarageFactory;


use designPatterns\creational\abstractFactory\Driver\AbstractDriver;
use designPatterns\creational\abstractFactory\Driver\AirplaneDriver;
use designPatterns\creational\abstractFactory\Transport\AbstractTransport;
use designPatterns\creational\abstractFactory\Transport\Airplane;

class AirplaneGarage extends AbstractGarageFactory
{

    /**
     * Получаем водителя
     * @return AbstractDriver
     */
    function getDriver(): AbstractDriver
    {
        return new AirplaneDriver();
    }

    /**
     * Получаем транспорт
     * @return AbstractTransport
     */
    function getTransport(): AbstractTransport
    {
        return new Airplane();
    }
}