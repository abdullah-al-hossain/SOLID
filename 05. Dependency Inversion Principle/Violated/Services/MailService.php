<?php

class MailService {
    public function sendMail(String $text, String $email):void {
        echo "Sending SMS via GP:", PHP_EOL;
        echo "----> Receiver: " . $email, PHP_EOL;
        echo "----> Text:\n" . $text, PHP_EOL;
    }
}