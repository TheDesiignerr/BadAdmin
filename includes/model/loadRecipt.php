<?php

function loadRecipt() {
    include_once 'dbh.php';

    $query = "SELECT * FROM recipt";
    $table = mysqli_query($conn, $query);

    return $table;
}