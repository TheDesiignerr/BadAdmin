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
                <h1 class="formTitle">Add Notes</h1>
                <h2 class="formSub">Enter note details</h2>
                <br>
                <form action="../../includes/control/handleNotes.php" method="POST">
                    <input type="link" placeholder="Title" name="noteTitle">
                    <br>
                    <textarea name="noteContent" placeholder="Write here..."></textarea>
                    <button>Add note</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>