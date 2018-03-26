<?php

namespace designPatterns\structural\decorator;

/**
 * Class Person
 * @package designPatterns\structural\decorator
 */
class Person implements WearInterface
{

    /**
     * @return string
     */
    public function dress()
    {
        echo 'Не одетый человек<br>';
    }
}