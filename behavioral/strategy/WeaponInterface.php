<?php
namespace designPatterns\behavioral\strategy;

/**
 * Interface WeaponInterface
 * @package designPatterns\behavioral\strategy
 */
interface WeaponInterface
{
    /**
     * Применить оружие
     * @return string
     */
    public function use():string;
}