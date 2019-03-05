<?php
session_start();
$length = 32;
$token=substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
$_SESSION['token'] = $token;

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
<?php //echo "Este es el token: ". $token; ?>
        <form method="POST" action="validar.php?action=login">

            Usuario: <input type="text" name="user"/>
            
            Contraseña: <input type="password" name="pass"/>
            <input type="hidden" name="tokenform" value=<?php echo "$token"; ?>>
            <input type="submit" value="Enviar">
        </form>

    </body>
</html>
