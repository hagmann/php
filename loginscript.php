<?php

session_start();

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo 'Beide Felder werden benötigt!';
    } else {
        $hash = '$2y$10$mwLE5kjD8icOujrqrcqNde/SpjVbDIYydLTPbVjiAZjB763S8HQ32';
        if ($_POST['username'] == 'simon' && password_verify($_POST['password'], $hash)) {
            echo 'login korrekt';

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['loggedin'] = true;

            header('Location: privat.php');
            exit;
        }
    }
}