<?php session_start(); ?>
<?php include_once '../../includes/packages/isLogged.php' ?>
<?php include_once '../../includes/model/loadVault.php' ?>
<?php include_once '../../includes/model/loadIncome.php' ?>
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
                        <th>Action</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <th><span class="greenText">Total <?php echo loadIncome() ?> EGP</span></th>
                        <th><span class="greenText"></span></th>
                        <th><span class="redText">Total</span></th>
                        <th><span class="redText">EGP</span></th>
                    </tr>
                    <?php
                    $table = loadVault();
                    
                    while ($row = mysqli_fetch_assoc($table)) {
                        if ($row['balanceType'] === 'Income') {
                            echo 
                        '
                        <tr>
                            <td><span class="greenText">'.$row['balanceType'].'</span></td>
                            <td><span class="greenText">'.$row['itemName'].'</span></td>
                            <td><span class="greenText">'.$row['price'].'</span></td>
                            <td><span class="greenText">'.$row['time'].'</span></td>
                        </tr>
                        '
                        ;
                        } else {
                            echo 
                        '
                        <tr>
                            <td><span class="redText">'.$row['balanceType'].'</span></td>
                            <td><span class="redText">'.$row['itemName'].'</span></td>
                            <td><span class="redText">'.$row['price'].'</span></td>
                            <td><span class="redText">'.$row['time'].'</span></td>
                        </tr>
                        '
                        ;
                        }
                        
                    }
                    ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>