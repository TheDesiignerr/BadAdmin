<?php

include_once '../model/dbh.php';

$itemId = $_GET['itemId'];

$query = "SELECT * FROM inventory WHERE id='$itemId'";
$table = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($table);

$itemName = $row['itemName'];
$itemPrice = $row['itemPrice'];

$query = "INSERT INTO sales(itemName, itemPrice) VALUES('$itemName','$itemPrice')";
mysqli_query($conn, $query);

$query = "INSERT INTO recipt(itemName, itemPrice) VALUES('$itemName','$itemPrice')";
mysqli_query($conn, $query);
header('Location: ../../view/sell/');
exit;