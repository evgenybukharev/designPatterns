<?php

namespace designPatterns\behavioral\strategy;

/**
 * Class MaceWeapon
 * @package designPatterns\behavioral\strategy
 */
class MaceWeapon implements WeaponInterface
{

    /**
     * Применить оружие
     * @return string
     */
    public function use():string
    {
        return 'Удар булавой';
    }
}