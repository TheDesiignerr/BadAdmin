<?php


function getTotalPrice() {
    include 'dbh.php';

    $query = "SELECT SUM(itemPrice) AS total FROM recipt";
    $table = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($table);

    return $row['total'];
}