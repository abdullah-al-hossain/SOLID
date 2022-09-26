<?php

interface MailProvider {
    public function sendMail(String $phoneNumber, String $text):void;
}