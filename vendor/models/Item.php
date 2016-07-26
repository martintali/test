<?php

/**
 * Created by PhpStorm.
 * User: martindaniel
 * Date: 7/25/16
 * Time: 8:35 PM
 */
namespace test\models;

class Item
{
    private $_id = 0;
    private $_name = "";
    private $_description = "";

    /**
     * @return string
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name) {
        $this->_name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->_description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->_description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->_id;
    }
}