<?php

class KitchenService {

    public function prepareFoods($foodItems = []) {
        foreach($foodItems as $foodItem) {
            $foodItem->prepare();
        }
    }

}