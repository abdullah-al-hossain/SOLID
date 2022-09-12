<?php

class FriedFood extends FoodItem 
{
    function __construct($name) {
        parent::__construct($name);
    }

    public function prepare(): void {
        echo "---> Frying " . $this->getName(), PHP_EOL; 
    }
}