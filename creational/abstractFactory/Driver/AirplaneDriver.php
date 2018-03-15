<?php

namespace designPatterns\creational\abstractFactory\Driver;


class AirplaneDriver extends AbstractDriver
{

    /**
     * Имя водителя
     * @return string
     */
    function getName(): string
    {
        return 'Владимир';
    }

    /**
     * Возраст водителя
     * @return int
     */
    function getAge(): int
    {
        return 45;
    }

    /**
     * Опыт водителя
     * @return int
     */
    function getExperience(): int
    {
        return 20;
    }

    /**
     * Тип траспортного средства
     * @return string
     */
    function getTransportType(): string
    {
        return 'Самолет';
    }
}