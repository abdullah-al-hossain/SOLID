<?php

require 'Models/FriedFood.php';
require 'Models/BakedFood.php';
require 'Services/KitchenService.php';

$foodItems = [
    new FriedFood('Chiken'),
    new BakedFood('Pasta'),
];

$kitchenService = new KitchenService;
$kitchenService->prepareFoods($foodItems);