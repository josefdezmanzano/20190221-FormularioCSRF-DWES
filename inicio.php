<?php
session_start();
//$length = 32;
//$_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
$token=$_SESSION['token'];

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
        <form method="POST" action="validar.php?action=logout">  
        <input type="hidden" name="tokenform" value=<?php echo "$token"; ?>>
            <input type="submit" value="Cerrar Sesion"/>
        </form>

    </body>
</html>