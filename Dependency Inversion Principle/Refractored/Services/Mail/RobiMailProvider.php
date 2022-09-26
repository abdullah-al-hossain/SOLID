<?php

include_once 'MailProvider.php';

class RobiMailProvider implements MailProvider {
    public function sendMail(String $phoneNumber, String $text):void {
        echo "Sending Mail via Robi:", PHP_EOL;
        echo "----> Receiver: " . $phoneNumber, PHP_EOL;
        echo "----> Text:\n" . $text, PHP_EOL;
    }
}