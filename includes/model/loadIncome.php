<?php

function loadIncome() {
    include 'dbh.php';

    $query = "SELECT SUM(price) AS total FROM vault WHERE balanceType = 'Income'";
    $table = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($table);

    return $row['total'];
}