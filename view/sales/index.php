<?php session_start(); ?>
<?php include_once '../../includes/packages/isLogged.php' ?>
<?php include_once '../../includes/model/loadSales.php' ?>
<?php include_once '../../includes/model/loadSalesByTime.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/main.css">
    <link rel="stylesheet" href="../../style/dashboard.css">
    <title>BadAdmin Systems</title>
</head>
<body>
    <header>
        <h1 class="headerTitle">BadAdmin Systems</h1>
        <h2 class="headerSub">Leading Business Kindom</h2>
    </header>

    <main>
        <div class="mainWrapper">
            <div class="mainContainer">

                <a href="../dashboard/" class="iconLink" style="font-size: 1.5rem;">go back</a>

                <table>
<?php
$table = loadSales();
$currentDate = null;

while ($row = mysqli_fetch_assoc($table)) {
    $saleDate = date('Y-m-d', strtotime($row['time'])); // Extract only the date
    
    // If a new date is encountered, display a new section header
    if ($currentDate !== $saleDate) {
        if ($currentDate !== null) {
            echo "</table>"; // Close previous table
        }
        echo "<br><br><h2 style='color: white;'>$saleDate</h2>";
        echo "<h2 style='color: white;'>Total: ".loadSalesByTime($saleDate)."</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Time</th>
                </tr>
                ";

        $currentDate = $saleDate;
    }

    // Display sale record
    $saleTime = date('H:i:s', strtotime($row['time'])); // Extract time
    echo "<tr>
            <td>{$row['itemName']}</td>
            <td>{$row['itemPrice']}</td>
            <td>{$saleTime}</td>
          </tr>";
}

if ($currentDate !== null) {
    echo "</table>"; // Close last table
}
?>
            </div>
        </div>
    </main>
</body>
</html>