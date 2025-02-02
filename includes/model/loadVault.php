<?php

function loadVault() {
    include 'dbh.php';

    $query = "SELECT * FROM vault ORDER BY time DESC";
    $table = mysqli_query($conn, $query);

    return $table;
}