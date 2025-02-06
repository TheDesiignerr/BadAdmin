<?php

function totalSaleDate($date) {
    $query = "SELECT SUM(price) AS total FROM sales WHERE time = '$date'";
    $table = mysqli_query($conn, $query);
    return $table;
}