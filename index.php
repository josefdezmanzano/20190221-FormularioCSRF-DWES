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
        if(isset($_POST["btn_env"])){
        $nombre=$_POST["nombre"];
        $password=$_POST["password"];
            echo $nombre;
            echo '<br>'.$password;
        }else{
        
        ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
            <label for="password">Password:</label>
            <input type="text" name="password">

            <input type="hidden" name="csrf" value="<?php echo $_SESSION["token"]; ?>">
            <input type="submit" name="btn_env">
        </form>
        <?php
        }
        ?>
    </body>
</html>
