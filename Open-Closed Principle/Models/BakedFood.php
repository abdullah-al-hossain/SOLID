<?php

class BakedFood extends FoodItem 
{
    function __construct($name) {
        parent::__construct($name);
    }

    public function prepare(): void {
        echo "---> Baking " . $this->getName(), PHP_EOL; 
    }
}