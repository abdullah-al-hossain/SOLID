
<?php

include_once 'Models/Customer.php';

class ShoppingCart {
    private float $totalAmount;
    private Customer $customer;

    public function ShoppingCart(float $totalAmount, Customer $customer) {
        $this->totalAmount = $totalAmount;
        $this->customer = $customer;
    }

    public function getTotalAmount():float {
        return $this->totalAmount;
    }

    public function setTotalAmount(float $totalAmount):void {
        $this->totalAmount = $totalAmount;
    }

    public function getCustomer():Customer  {
        return $this->customer;
    }

    public function setCustomer(Customer $customer):void {
        $this->customer = $customer;
    }
}