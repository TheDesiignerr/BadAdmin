<?php

function loadSalesByTime($time) {
    include 'dbh.php';
    $query = "SELECT SUM(itemPrice) AS dayTotal FROM sales WHERE DATE(time) = '$time'";
    $table = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($table);

    return $row['dayTotal'];
}