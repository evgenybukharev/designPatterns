<?php

namespace designPatterns\behavioral\strategy;

/**
 * Class PistolWeapon
 * @package designPatterns\behavioral\strategy
 */
class PistolWeapon implements WeaponInterface
{

    /**
     * Применить оружие
     * @return string
     */
    public function use():string
    {
        return 'Выстрел пистолетом';
    }
}