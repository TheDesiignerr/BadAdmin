<?php session_start(); ?>
<?php include_once '../../includes/packages/isLogged.php' ?>
<?php include_once '../../includes/model/loadSales.php' ?>
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
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Date</th>
                    </tr>
                    <?php
                    $table = loadSales();
                    
                    while ($row = mysqli_fetch_assoc($table)) {
                        echo 
                        '
                        <tr>
                            <td>'.$row['itemName'].'</td>
                            <td>'.$row['itemPrice'].'</td>
                            <td>'.$row['time'].'</td>
                        </tr>
                        '
                        ;
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>