<?php
namespace designPatterns\structural\decorator;

/**
 * Class WearAbstractDecorator
 * @package designPatterns\structural\decorator
 */
abstract class WearAbstractDecorator implements WearInterface
{
    /**
     * @var WearInterface
     */
    public $wear;

    public function __construct(WearInterface $wear)
    {
        $this->wear = $wear;
    }

    /**
     * @return string
     */
    abstract function dress();
}