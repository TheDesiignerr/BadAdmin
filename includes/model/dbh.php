<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'shopsystem';
$conn = '';

try {
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
} catch (mysqli_sql_exception) {
    header('Location: ../../events/db_error/');
    exit;
}