<?php

include_once 'BaseAccount.php';
include_once 'interfaces/SavingsAccount.php';

class StudentAccount extends BaseAccount implements SavingsAccount {
    private String $institutionName;

    function __construct(int $accountId,
                          String $accountName,
                          float $balance,
                          String $institutionName) {
        parent::__construct($accountId, $accountName, $balance);
        $this->institutionName = $institutionName;
    }

    public function creditLocalAmount(float $amountInBDT):void {
        $this->balance += $amountInBDT;
    }
    
}