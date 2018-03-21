<?php

namespace designPatterns\behavioral\observer;


use SplObserver;
use SplSubject;

/**
 * Class Customer
 * @package designPatterns\behavioral\observer
 */
class Customer implements SplObserver
{
    /**
     * @var Shop
     */
    private $shop;

    /**
     * @var Имя покупателя
     */
    public $name;

    /**
     * Customer constructor.
     * @param Shop $shop
     */
    public function __construct(Shop $shop,$name)
    {
        $this->shop = $shop;
        $this->name = $name;

        $shop->attach($this);
    }

    /**
     * Receive update from subject
     * @link  http://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     *                            The <b>SplSubject</b> notifying the observer of an update.
     *                            </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        echo '<p>Получатель '.$this->name.' получил информацию от магазина: '.spl_object_hash($subject).'</p>';
    }
}