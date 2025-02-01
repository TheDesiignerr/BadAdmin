<?php

include_once '../packages/get.php';
include_once '../model/buyItem.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemName = get('itemName');
    $itemPrice = get('itemPrice');

    addItem($itemName, $itemPrice);
} else {
    header('Location: ../../events/default/');
    exit;
}