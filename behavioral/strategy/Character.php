<?php

namespace designPatterns\behavioral\strategy;

/**
 * Class Character
 * @package designPatterns\behavioral\strategy
 */
class Character
{
    /**
     * @var WeaponInterface
     */
    private $weapon;

    /**
     * Character constructor.
     * @param WeaponInterface $weapon
     */
    public function __construct(WeaponInterface $weapon)
    {
        $this->setWeapon($weapon);
    }

    /**
     * @param WeaponInterface $weapon
     */
    public function setWeapon(WeaponInterface $weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * @return string
     */
    public function useWeapon()
    {
        return $this->weapon->use();
    }
}