<?php

namespace designPatterns\behavioral\strategy;

/**
 * Class KnifeWeapon
 * @package designPatterns\behavioral\strategy
 */
class KnifeWeapon implements WeaponInterface
{
    
    /**
     * Применить оружие
     * @return string
     */
    public function use():string
    {
        return 'Удар ножом';
    }
}