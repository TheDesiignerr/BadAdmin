<?php

function fetchUsername() {
    session_start();
    return $_SESSION['loggedUsername'];
}