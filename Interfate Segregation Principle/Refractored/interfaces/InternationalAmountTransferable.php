<?php

interface InternationalAmountTransferable {
    public function creditInternationalAmount(float $amountInUSD):void;
}