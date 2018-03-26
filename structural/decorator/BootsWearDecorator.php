<?php
namespace designPatterns\structural\decorator;

/**
 * Class BootsWearDecorator
 * @package designPatterns\structural\decorator
 */
class BootsWearDecorator extends WearAbstractDecorator
{

    /**
     * @return string
     */
    function dress()
    {
        $this->wear->dress();

        echo 'Одеты сапоги<br>';
    }
}