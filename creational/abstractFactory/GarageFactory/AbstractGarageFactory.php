<?php

namespace designPatterns\creational\abstractFactory\GarageFactory;

use designPatterns\creational\abstractFactory\Driver\AbstractDriver;
use designPatterns\creational\abstractFactory\Transport\AbstractTransport;

abstract class AbstractGarageFactory
{
    /**
     * Получаем водителя
     * @return AbstractDriver
     */
    abstract function getDriver(): AbstractDriver;

    /**
     * Получаем транспорт
     * @return AbstractTransport
     */
    abstract function getTransport(): AbstractTransport;
}