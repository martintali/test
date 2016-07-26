<?php

/**
 * Created by PhpStorm.
 * User: martindaniel
 * Date: 7/25/16
 * Time: 8:34 PM
 */

namespace test\models;
use \test\models\Item;

class Carro
{
    private static $instance;

    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct() {
    }

    /**
     * @var \test\models\Item[] array
     */
    private $_items = [];

    /**
     * @return Item[]
     */
    public function getItems() {
        return $this->_items;
    }

    /**
     * @param \test\models\Item $item
     * @return $this
     */
    public function addItem($item) {
        $this->_items[$item->getId()] = $item;

        return $this;
    }

    /**
     * @param \test\models\Item[] $item
     * @return $this
     */
    public function setItems($items) {
        $this->_items = $items;

        return $this;
    }

    public function deleteItem($item) {
        foreach($this->_items as $_item) {
            if ($item->getId() === $_item->getId()) {
                unset($this->_items[$item->getId()]);
            }
        }

        return $this;
    }
}