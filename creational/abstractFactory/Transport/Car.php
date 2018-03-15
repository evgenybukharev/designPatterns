<?php

namespace designPatterns\creational\abstractFactory\Transport;

/**
 * Class Car
 * @package designPatterns\creational\abstractFactory\Transport
 */
class Car extends AbstractTransport
{
    /**
     * Скорость транспортного средства
     * @return int
     */
    function getSpeed(): int
    {
        return 300;
    }

    /**
     * Количество пассажиров
     * @return int
     */
    function getPassengerCount(): int
    {
        return 3;
    }

    /**
     * Марка транспортного средства
     * @return string
     */
    function getBrand(): string
    {
        return 'BWM';
    }
}