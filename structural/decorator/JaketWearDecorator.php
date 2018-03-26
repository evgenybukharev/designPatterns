<?php
namespace designPatterns\structural\decorator;

/**
 * Class JaketWearDecorator
 * @package designPatterns\structural\decorator
 */
class JaketWearDecorator extends WearAbstractDecorator
{

    /**
     * @return string
     */
    function dress(): string
    {
        $this->wear->dress();

        return 'Одета куртка<br>';
    }
}