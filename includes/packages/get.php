<?php

function get($inputName) {
    return htmlspecialchars($_POST[$inputName]);
}