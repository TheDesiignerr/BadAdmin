<?php

include_once '../packages/get.php';
include_once '../model/addItem.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemIcon = get('itemIcon');
    $itemName = get('itemName');
    $itemPrice = get('itemPrice');
    $itemAmount = get('itemAmount');

    addItem($itemIcon, $itemName, $itemPrice, $itemAmount);
} else {
    header('Location: ../../events/default/');
    exit;
}