<?php

include_once 'Models/Customer.php';
include_once 'Models/ShoppingCart.php';
include_once 'Services/CheckoutService.php';

$customer = new Customer("Abdullah Al Hossain", "abdullah@gmail.com");

$shoppingCart = new ShoppingCart(570.00, $customer);

$checkoutService = new CheckoutService();

$checkoutService->checkout($shoppingCart);