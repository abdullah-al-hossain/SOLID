<?php

require 'FoodItem.php';

class Juice extends FoodItem 
{
    function __construct($name) {
        parent::__construct($name);
    }

    public function prepare(): void {
        echo "---> Making " . $this->getName(), PHP_EOL; 
    }
}