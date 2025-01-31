<?php

include_once '../model/getTotalPrice.php';
include_once '../model/resetRecipt.php';
include_once '../packages/get.php';

    $total = getTotalPrice();
    $paid = get('paidMoney');

    $change = $paid - $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/main.css">
    <link rel="stylesheet" href="../../style/index.css">
    <title>BadAdmin Systems</title>
</head>
<body>
    <header>
        <h1 class="headerTitle">BadAdmin Systems</h1>
        <h2 class="headerSub">Leading Business Kindom</h2>
    </header>

    <footer>
        <br>
        <br>
        <h1 class="footerText">Change: <?php global $change; echo $change ?></h1>
        <br>
        <a href="../../view/dashboard/" style="text-align: center; display: block;">Home</a>
    </footer>
</body>
</html>

<?php
resetRecipt();
?>