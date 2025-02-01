<?php

function loadSales() {
    include_once 'dbh.php';

    $query = "SELECT * FROM sales ORDER BY time DESC";
    $table = mysqli_query($conn, $query);

    return $table;
}