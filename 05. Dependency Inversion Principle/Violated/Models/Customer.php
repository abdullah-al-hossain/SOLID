<?php

class Customer {
    private $fullName;
    private $email;

    function Customer($fullName, $email) {
        $this->fullName = $fullName;
        $this->email = $email;
    }

    public function getFullName(): String {
        return $this->fullName;
    }

    public function setFullName($fullName): void {
        $this->fullName = fullName;
    }

    public function getEmail(): String {
        return $this->email;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }
}