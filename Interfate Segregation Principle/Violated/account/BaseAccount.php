<?php

class BaseAccount {
    protected int $accountId;
    protected String $accountName;
    protected float $balance;

    function __construct(int $accountId, String $accountName, float $balance) 
    {
        $this->accountId = $accountId;
        $this->accountName = $accountName;
        $this->balance = $balance;
    }

    public function getBalance():float 
    {
        return $this->balance;
    }

    public function setBalance(float $balance):void 
    {
        $this->balance = $balance;
    }
}