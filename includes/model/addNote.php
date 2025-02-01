<?php

function addNote($title, $content, $author) {
    include_once 'dbh.php';

    $query = "INSERT INTO notes(noteTitle, noteContent, noteAuthor) VALUES('$title','$content','$author')";
    mysqli_query($conn, $query);
    header('Location: ../../view/notesView/');
    exit;
}