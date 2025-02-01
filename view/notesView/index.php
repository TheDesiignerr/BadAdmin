<?php session_start(); ?>
<?php include_once '../../includes/packages/isLogged.php' ?>
<?php include_once '../../includes/model/loadNotes.php' ?>
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
                <?php
                    $table = loadNotes();

                    

                    while($row = mysqli_fetch_assoc($table)) {
                        echo 
                        '
                         <div class="noteBox">
                            <h1 class="noteTitle">'.$row['noteTitle'].'</h1>
                            <p class="noteContent">'.$row['noteContent'].'</p>
                            <br>
                            <div class="noteAuthorDiv">
                                <p class="noteAuthor">By '.$row['noteAuthor'].'</p>
                            </div>
                            <div class="noteTimeDiv">
                                <p class="noteTime">'.$row['time'].'</p>
                            </div>
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