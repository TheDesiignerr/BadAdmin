<?php

function resetRecipt() {
    include 'dbh.php';

    $query = "TRUNCATE recipt";
    mysqli_query($conn, $query);
}