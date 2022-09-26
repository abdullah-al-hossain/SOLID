<?php

include_once 'MailService.php';
include_once 'Models/ShoppingCart.php';

class CheckoutService {
    private MailService $mailService;

    public function CheckoutService() {
        $this->mailService = new MailService;
    }

    private function sendConfirmationSms(ShoppingCart $shoppingCart):void  {
        $message = "Thank you, " . $shoppingCart->getCustomer()->getFullName() . " for shopping at our store." .
                "\n Your order of total BDT " . $shoppingCart->getTotalAmount() . " has been confirmed.";

        $this->mailService->sendSms($message, $shoppingCart->getCustomer()->getEmail());
    }

    public function checkout(ShoppingCart $shoppingCart):void  {
        // do some other stuff here
        echo "Checking out " . $shoppingCart->getCustomer()->getFullName();
        // send mail
        $this->sendConfirmationSms($shoppingCart);
    }
}
