<?php

include_once 'Models/Customer.php';
include_once 'Models/ShoppingCart.php';
include_once 'Services/CheckoutService.php';
include_once 'Services/Mail/RobiMailProvider.php';
include_once 'Services/Mail/GpMailProvider.php';

$customer = new Customer("Abdullah Al Hossain", "abdullah@gmail.com");

$shoppingCart = new ShoppingCart(570.00, $customer);

$mailProvider = new RobiMailProvider; 

// $mailProvider = new GpMailProvider; 
$mailService = new MailService($mailProvider);

$checkoutService = new CheckoutService($mailService);

$checkoutService->checkout($shoppingCart);