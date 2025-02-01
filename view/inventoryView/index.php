<?php session_start(); ?>
<?php include_once '../../includes/packages/isLogged.php' ?>
<?php include_once '../../includes/model/loadItems.php' ?>
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

                <form action="../../includes/control/handleSearch.php" method="GET">
                    <input type="text" placeholder="Search" name="search"><br>
                    <button>Search</button>
                </form>

                <div class="panelBox">
                    <h1 class="panelTitle">Back</h1>
                    <a href="../inventory/" class="iconLink">
                        <img src="../../assets/icons/back.png" class="boxIcon">
                    </a>
                </div>
                
                <?php
                    $table = loadItems();

                    

                    while($row = mysqli_fetch_assoc($table)) {
                        echo 
                        '
                        <div class="panelBox">
                            <h1 class="panelTitle">'.$row['itemName'].'</h1>
                            <img src="'.$row['itemIcon'].'" class="itemIcon">
                            <h2 class="panelPrice">'.$row['itemPrice'].' EGP</h2>
                            <h2 class="panelAmount">QTY '.$row['itemAmount'].'</h2>
                        </div>
                        '
                        ;
                    }
                ?>
            </div>

        </div>
    </main>
</body>
</html>