<?php

namespace designPatterns\creational\abstractFactory\Transport;

/**
 * Class AbstractTransport
 * @package designPatterns\creational\abstractFactory\Transport
 */
abstract class AbstractTransport
{
    /**
     * Скорость транспортного средства
     * @return int
     */
    abstract function getSpeed(): int;

    /**
     * Количество пассажиров
     * @return int
     */
    abstract function getPassengerCount(): int;

    /**
     * Марка транспортного средства
     * @return string
     */
    abstract function getBrand(): string;
}