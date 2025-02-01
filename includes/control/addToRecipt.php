<?php

include_once '../model/dbh.php';
include_once '../model/takeItem.php';

$itemId = $_GET['itemId'];

$query = "UPDATE inventory SET itemAmount = itemAmount - 1 WHERE id='$itemId'";
mysqli_query($conn, $query);

$query = "SELECT * FROM inventory WHERE id='$itemId'";
$table = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($table);

$itemName = $row['itemName'];
$itemPrice = $row['itemPrice'];

$query = "INSERT INTO sales(itemName, itemPrice) VALUES('$itemName','$itemPrice')";
mysqli_query($conn, $query);

$query = "INSERT INTO recipt(itemName, itemPrice) VALUES('$itemName','$itemPrice')";
mysqli_query($conn, $query);

$query = "INSERT INTO vault(balanceType, itemName, price) VALUES('Income','$itemName','$itemPrice')";
mysqli_query($conn, $query);
header('Location: ../../view/sell/');
exit;