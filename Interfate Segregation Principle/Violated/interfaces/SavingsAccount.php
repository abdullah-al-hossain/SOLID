<?php

interface SavingsAccount {
    public function getBalance():float;

    public function creditLocalAmount(float $amountInBDT):void;

    public function creditInternationalAmount(float $amountInUSD):void;
}