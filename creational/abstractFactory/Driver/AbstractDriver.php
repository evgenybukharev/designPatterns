<?php

namespace designPatterns\creational\abstractFactory\Driver;

/**
 * Class AbstractDriver
 * @package designPatterns\creational\abstractFactory\Driver
 */
abstract class AbstractDriver
{
    /**
     * Имя водителя
     * @return string
     */
    abstract function getName(): string;

    /**
     * Тип траспортного средства
     * @return string
     */
    abstract function getTransportType(): string;

    /**
     * Возраст водителя
     * @return int
     */
    abstract function getAge(): int;

    /**
     * Опыт водителя
     * @return int
     */
    abstract function getExperience(): int;
}