<?php

namespace designPatterns\creational\abstractFactory\Transport;


class Airplane extends AbstractTransport
{

    /**
     * Скорость транспортного средства
     * @return int
     */
    function getSpeed(): int
    {
        return 700;
    }

    /**
     * Количество пассажиров
     * @return int
     */
    function getPassengerCount(): int
    {
        return 180;
    }

    /**
     * Марка транспортного средства
     * @return string
     */
    function getBrand(): string
    {
        return 'Airbus';
    }
}