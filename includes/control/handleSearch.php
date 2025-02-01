<?php

include_once '../packages/get.php';
include_once '../model/loadSearch.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: ../../view/searchResult?search='.$_GET['search']);
    exit;
} else {
    header('Location: ../../events/default/');
    exit;
}