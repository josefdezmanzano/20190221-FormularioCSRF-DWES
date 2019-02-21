<?php session_start(); ?>
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
        <?php
        if (isset($_SESSION['user'])) {
           // $nombre = $_POST["user"];
            //$password = $_POST["pass"];
            echo "<p>Bienvenido de vuelta, " . $_SESSION["user"] . "!<br>";
            echo '<a href="process.php?action=logout">Logout</a></p>';
            } else {
            ?>
            <form method="POST" action="process.php?action=login" enctype="multipart/form-data">
                <label for="nombre">Nombre:</label>
                <input type="text" name="user">
                <label for="password">Password:</label>
                <input type="text" name="pass">

                <input type="hidden" name="csrf" value="<?php echo $_SESSION["token"]; ?>">
                <input type="submit" name="btn_env">
            </form>
            <?php
        }
        ?>
    </body>
</html>
