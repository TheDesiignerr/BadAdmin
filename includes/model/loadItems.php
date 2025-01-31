<?php

function loadItems() {
    include_once 'dbh.php';

    $query = "SELECT * FROM inventory";
    $table = mysqli_query($conn, $query);

    return $table;
}