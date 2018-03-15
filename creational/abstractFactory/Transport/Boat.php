<?php

namespace designPatterns\creational\abstractFactory\Transport;


class Boat extends AbstractTransport
{

    /**
     * Скорость транспортного средства
     * @return int
     */
    function getSpeed(): int
    {
        return 120;
    }

    /**
     * Количество пассажиров
     * @return int
     */
    function getPassengerCount(): int
    {
        return 10;
    }

    /**
     * Марка транспортного средства
     * @return string
     */
    function getBrand(): string
    {
        return 'Malibu Boats';
    }
}