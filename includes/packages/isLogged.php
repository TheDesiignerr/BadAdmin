<?php

if (!$_SESSION['loggedUsername']) {
    header('Location: ../../events/notLogged/');
    exit;
}