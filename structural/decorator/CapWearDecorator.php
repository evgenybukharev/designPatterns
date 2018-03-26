<?php
namespace designPatterns\structural\decorator;

/**
 * Class CapWearDecorator
 * @package designPatterns\structural\decorator
 */
class CapWearDecorator extends WearAbstractDecorator
{

    /**
     * @return string
     */
    function dress()
    {
        $this->wear->dress();

        echo 'Одета шапка<br>';
    }
}