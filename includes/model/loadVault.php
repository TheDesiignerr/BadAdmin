<?php

function loadVault() {
    include 'dbh.php';

    $query = "SELECT * FROM vault O";
    $table = mysqli_query($conn, $query);

    return $table;
}