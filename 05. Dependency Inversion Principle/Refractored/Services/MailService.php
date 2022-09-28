<?php

class MailService {
    private MailProvider $mailProvider;

    public function MailService(MailProvider $mailProvider) {
        $this->mailProvider = $mailProvider;
    }

    public function sendMail(String $text, String $email):void {
        $this->mailProvider->sendMail($email, $text);
    }
}