<?php session_start(); ?>
<?php include_once '../../includes/packages/isLogged.php' ?>
<?php include_once '../../includes/model/loadRecipt.php' ?>
<?php include_once '../../includes/model/getTotalPrice.php' ?>
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
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                    <?php
                    $table = loadRecipt();
                    
                    while ($row = mysqli_fetch_assoc($table)) {
                        echo 
                        '
                        <tr>
                            <td>'.$row['itemName'].'</td>
                            <td>'.$row['itemPrice'].'</td>
                        </tr>
                        '
                        ;
                    }
                    ?>
                </table>
                <h1 style="text-align: center;">Total price: <?php echo getTotalPrice()?></h1>
                <br>
                <br>
                <form action="../../includes/control/calculateChange.php" method="POST">
                    <input type="number" placeholder="Paid money" name="paidMoney">
                    <br>
                    <button>Confirm</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>