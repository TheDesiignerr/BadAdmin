<?php session_start(); ?>
<?php include_once '../../includes/packages/isLogged.php' ?>
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
                <div class="panelBox">
                    <h1 class="panelTitle">Sales</h1>
                    <a href="../sales/" class="iconLink">
                        <img src="../../assets/icons/sales.png" class="boxIcon">
                    </a>
                </div>

                <div class="panelBox">
                    <h1 class="panelTitle">Vault</h1>
                    <a href="" class="iconLink">
                        <img src="../../assets/icons/vault.png" class="boxIcon">
                    </a>
                </div>

                <br>

                <div class="panelBox">
                    <h1 class="panelTitle">Inventory</h1>
                    <a href="../inventory/" class="iconLink">
                        <img src="../../assets/icons/inv.png" class="boxIcon">
                    </a>
                </div>

                <div class="panelBox">
                    <h1 class="panelTitle">Notes</h1>
                    <a href="" class="iconLink">
                        <img src="../../assets/icons/notes.png" class="boxIcon">
                    </a>
                </div>

                <br>

                <div class="panelBox">
                    <h1 class="panelTitle">Sell</h1>
                    <a href="../sell/" class="iconLink">
                        <img src="../../assets/icons/sell.png" class="boxIcon">
                    </a>
                </div>

                <div class="panelBox">
                    <h1 class="panelTitle">Buy</h1>
                    <a href="" class="iconLink">
                        <img src="../../assets/icons/buy.png" class="boxIcon">
                    </a>
                </div>

                <br>

                <div class="panelBox">
                    <h1 class="panelTitle">Logout</h1>
                    <a href="../logout/" class="iconLink">
                        <img src="../../assets/icons/logout.png" class="boxIcon">
                    </a>
                </div>

                <div class="panelBox">
                    <h1 class="panelTitle">Recipt</h1>
                    <a href="../recipt/" class="iconLink">
                        <img src="../../assets/icons/recipt.png" class="boxIcon">
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>