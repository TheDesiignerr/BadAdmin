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
                    <h1 class="panelTitle">View</h1>
                    <a href="../inventoryView/" class="iconLink">
                        <img src="../../assets/icons/view.png" class="boxIcon">
                    </a>
                </div>

                <div class="panelBox">
                    <h1 class="panelTitle">Add</h1>
                    <a href="../inventoryAdd/" class="iconLink">
                        <img src="../../assets/icons/add.png" class="boxIcon">
                    </a>
                </div>

                <br>

                <div class="panelBox">
                    <h1 class="panelTitle">Back</h1>
                    <a href="../dashboard/" class="iconLink">
                        <img src="../../assets/icons/back.png" class="boxIcon">
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>