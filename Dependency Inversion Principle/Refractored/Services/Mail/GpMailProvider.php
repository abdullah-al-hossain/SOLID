<?php

include_once 'MailProvider.php';

class GpMailProvider implements MailProvider {
    public function sendMail(String $phoneNumber, String $text):void {
        echo "Sending Mail via GP:";
        echo "----> Receiver: " . $phoneNumber;
        echo "----> Text:\n" . text;
    }
}