<?php

function loadSales() {
    include_once 'dbh.php';

    $query = "SELECT * FROM sales";
    $table = mysqli_query($conn, $query);

    return $table;
}