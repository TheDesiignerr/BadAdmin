<?php

function loadNotes() {
    include 'dbh.php';

    $query = "SELECT * FROM notes ORDER BY time DESC";
    $table = mysqli_query($conn, $query);

    return $table;
}