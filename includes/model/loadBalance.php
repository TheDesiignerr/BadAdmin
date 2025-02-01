<?php

function loadBalance() {
    include 'dbh.php';
    include_once 'loadIncome.php';
    include_once 'loadOutcome.php';

    $totalIncome = loadIncome();
    $totalOutcome = loadOutcome();
    $totalBalance = $totalIncome - $totalOutcome;

    return $totalBalance;
}