<?php

include_once '../packages/get.php';
include_once '../model/validateLogin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = get('user');
    $password = get('pass');

    if (empty($username) || empty($password)) {
        header('Location: ../../events/emptyForm/');
        exit;
    } else {
        validateLogin($username, $password);
    }
} else {
    header('Location: ../../events/default/');
    exit;
}