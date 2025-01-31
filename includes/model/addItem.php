<?php

function additem($icon, $name, $price, $amount) {
    include_once 'dbh.php';

    $query = "INSERT INTO inventory(itemIcon, itemName, itemPrice, itemAmount) VALUES('$icon','$name','$price','$amount')";
    mysqli_query($conn, $query);
    header('Location: ../../view/inventory/');
    exit;
}