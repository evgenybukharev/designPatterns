<?php

namespace designPatterns\behavioral\observer;

use SplObjectStorage;
use SplObserver;
use SplSubject;

/**
 * Class Shop
 * @package designPatterns\behavioral\observer
 */
class Shop implements SplSubject
{
    /**
     * Object Storage
     * @var SplObjectStorage
     */
    private $storage;

    /**
     * Shop constructor.
     */
    public function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    /**
     * Attach an SplObserver
     * @link  http://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     *                              The <b>SplObserver</b> to attach.
     *                              </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    /**
     * Detach an observer
     * @link  http://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     *                              The <b>SplObserver</b> to detach.
     *                              </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    /**
     * Notify an observer
     * @link  http://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        /** @var SplObserver $obj */
        foreach ($this->storage as $obj) {
            $obj->update($this);
        }
    }
}