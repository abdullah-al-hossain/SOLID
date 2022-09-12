<?php

require 'Models/FoodItem.php';
require 'Models/FriedFood.php';
require 'Models/BakedFood.php';
require 'Models/Juice.php';
require 'Services/KitchenService.php';

$foodItems = [
    new FriedFood('Chiken'),
    new BakedFood('Pasta'),
    new Juice('Lemonade'),
];

$kitchenService = new KitchenService;
$kitchenService->prepareFoods($foodItems);