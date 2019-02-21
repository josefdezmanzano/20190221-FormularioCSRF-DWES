<?php
session_start();
$length = 32;
$_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="process.php">

            <input type="text" name="hello" value="world"/>
            <input type="hidden" name="token" value="<?= $_SESSION['token'] ?>"/>
            <input type="submit" value="ir"/>
        </form>

    </body>
</html>
