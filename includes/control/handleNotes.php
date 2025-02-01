<?php

include_once '../packages/get.php';
include_once '../packages/fetchUsername.php';
include_once '../model/addNote.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noteTitle = get('noteTitle');
    $noteContent = get('noteContent');

    addNote($noteTitle, $noteContent, fetchUsername());
} else {
    header('Location: ../../events/default/');
    exit;
}