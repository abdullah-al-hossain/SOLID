<?php

include_once 'BaseAccount.php';
include_once 'interfaces/SavingsAccount.php';

class RemittanceSavingsAccount extends BaseAccount implements SavingsAccount {
    private String $primarySourceCountry;

    function __construct(int $accountId,
                                    String $accountName,
                                    float $balance,
                                    String $primarySourceCountry) {
        parent::__construct($accountId, $accountName, $balance);
        $this->primarySourceCountry = $primarySourceCountry;
    }

    public function getBalance():float
    {
        return $this->balance;
    }

    public function creditLocalAmount(float $amountInBDT):void {
        $this->balance += $amountInBDT;
    }

    public function creditInternationalAmount(float $amountInUSD):void {
        $amountInBDT = $amountInUSD * 86;
        $incentiveAmount = $amountInBDT * 0.02;
        $this->balance += $amountInBDT + $incentiveAmount;
    }
}