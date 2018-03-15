<?php

namespace designPatterns\creational\abstractFactory\Driver;


class CarDriver extends AbstractDriver
{

    /**
     * Имя водителя
     * @return string
     */
    function getName(): string
    {
        return "Иван";
    }

    /**
     * Тип траспортного средства
     * @return string
     */
    function getTransportType(): string
    {
        return 'Автомобиль';
    }

    /**
     * Возраст водителя
     * @return int
     */
    function getAge(): int
    {
        return 30;
    }

    /**
     * Опыт водителя
     * @return int
     */
    function getExperience(): int
    {
        return 4;
    }
}