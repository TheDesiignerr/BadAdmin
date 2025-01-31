<?php

function validateLogin($user, $pass) {
    include_once 'dbh.php';

    $query = "SELECT * FROM users WHERE username = '$user'";
    $table = mysqli_query($conn, $query);

    if ($table === null) {
        header('Location: ../../events/noUser/');
        mysqli_close($conn);
        exit;
    } else {
        
        $row = mysqli_fetch_assoc($table);
        $dbUser = $row['username'];
        $dbPass = $row['passwrd'];

        if ($user === $dbUser && $pass === $dbPass) {
            session_start();
            $_SESSION['loggedUsername'] = $dbUser;
            header('Location: ../../view/dashboard/');
            exit;
        } else {
            header('Location: ../../events/wrong/');
            exit;
        }
    }
}