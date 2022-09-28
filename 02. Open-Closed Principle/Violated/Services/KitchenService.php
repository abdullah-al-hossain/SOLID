<?php

class KitchenService {

    public function prepareFoods($foodItems = []) {

        foreach ($foodItems as $foodItem) {

            if (is_a($foodItem, 'BakedFood')) {
                echo "---> Baking " . $foodItem->getName(), PHP_EOL;
            }

            if (is_a($foodItem, 'FriedFood')) {
                echo "---> Frying " . $foodItem->getName(), PHP_EOL;
            }

            if (is_a($foodItem, 'Juice')) {
                echo "---> Making " . $foodItem->getName(), PHP_EOL;
            }

        }

    }

}