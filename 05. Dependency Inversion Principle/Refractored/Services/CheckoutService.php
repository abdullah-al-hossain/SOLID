<?php

include_once 'MailService.php';
include_once 'Models/ShoppingCart.php';

class CheckoutService {
    private MailService $mailService;

    public function CheckoutService(MailService $mailService) {
        $this->mailService = $mailService;
    }

    private function sendConfirmationMail(ShoppingCart $shoppingCart):void  {
        $message = "Thank you, " . $shoppingCart->getCustomer()->getFullName() . " for shopping at our store." .
                "\n Your order of total BDT " . $shoppingCart->getTotalAmount() . " has been confirmed.";

        $this->mailService->sendMail($message, $shoppingCart->getCustomer()->getEmail());
    }

    public function checkout(ShoppingCart $shoppingCart):void  {
        // do some other stuff here
        echo "Checking out " . $shoppingCart->getCustomer()->getFullName();
        // send mail
        $this->sendConfirmationMail($shoppingCart);
    }
}
