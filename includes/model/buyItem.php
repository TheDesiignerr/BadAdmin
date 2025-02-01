<?php

function additem($name, $price) {
    include_once 'dbh.php';

    $query = "INSERT INTO vault(balanceType, itemName, price) VALUES('Outcome','$name','$price')";
    mysqli_query($conn, $query);
    header('Location: ../../view/buy/');
    exit;
}