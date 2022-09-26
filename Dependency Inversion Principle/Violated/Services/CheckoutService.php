<?php

include_once 'SmsService.php';
include_once 'Models/ShoppingCart.php';

class CheckoutService {
    private SmsService $smsService;

    public function CheckoutService() {
        $this->smsService = new SmsService;
    }

    private function sendConfirmationSms(ShoppingCart $shoppingCart):void  {
        $message = "Thank you, " . $shoppingCart->getCustomer()->getFullName() . " for shopping at our store." .
                "\n Your order of total BDT " . $shoppingCart->getTotalAmount() . " has been confirmed.";

        $this->smsService->sendSms($message, $shoppingCart->getCustomer()->getEmail());
    }

    public function checkout(ShoppingCart $shoppingCart):void  {
        // do some other stuff here
        echo "Checking out " . $shoppingCart->getCustomer()->getFullName();
        // send sms
        $this->sendConfirmationSms($shoppingCart);
    }
}
