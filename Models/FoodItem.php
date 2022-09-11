<?php

require 'Interfaces/PrepareFoodItem.php';

abstract class FoodItem implements PrepareFoodItem {
    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}