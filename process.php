<?php

session_start();
if ($_SESSION['token'] == $_POST['token']) {
    header('Location:login.php');
} else {
    echo 'Toquen Invalido';
    session_destroy();
    die();
    //header('Location:login.php');
}
