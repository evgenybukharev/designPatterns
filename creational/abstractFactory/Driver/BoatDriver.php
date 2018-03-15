<?php

namespace designPatterns\creational\abstractFactory\Driver;


class BoatDriver extends AbstractDriver
{

    /**
     * Имя водителя
     * @return string
     */
    function getName(): string
    {
        return 'Владислав';
    }

    /**
     * Тип траспортного средства
     * @return string
     */
    function getTransportType(): string
    {
        return 'Лодка';
    }

    /**
     * Возраст водителя
     * @return int
     */
    function getAge(): int
    {
        return 37;
    }

    /**
     * Опыт водителя
     * @return int
     */
    function getExperience(): int
    {
        return 7;
    }
}