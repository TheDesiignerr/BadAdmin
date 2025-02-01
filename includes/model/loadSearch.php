<?php

function loadSearch($search) {
    include 'dbh.php';

    $query = "SELECT * FROM inventory WHERE itemName LIKE '%$search%'";
    $table = mysqli_query($conn, $query);

    return $table;
}