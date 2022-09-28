<?php
include_once 'account/RemittanceSavingsAccount.php';
include_once 'account/StudentAccount.php';

$remittanceSavingsAccount = new RemittanceSavingsAccount(
    1,
    "Rahim",
    100,
    "Italy");

$remittanceSavingsAccount->creditLocalAmount(100);
$remittanceSavingsAccount->creditInternationalAmount(10);

echo "Remmitance Account Balance: " . $remittanceSavingsAccount->getBalance(), PHP_EOL;


$studentAccount = new StudentAccount(
    1,
    "Karim",
    100,
    "BUET");

$studentAccount->creditLocalAmount(100);
$studentAccount->creditInternationalAmount(10);

echo $studentAccount->getBalance(), PHP_EOL;