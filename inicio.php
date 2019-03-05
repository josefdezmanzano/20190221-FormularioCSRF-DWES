<?php
session_start();
//$length = 32;
//$_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
if(isset($_COOKIE['ultimaVez'])){
    setcookie("ultimaVez",$_COOKIE['ultimaVez']+1,time()+365*60*60);
    setcookie("horaUltimaVez",date("Y-m-d H:i:s"),time()+365*60*60);
    

}else{
    setcookie("ultimaVez",1,time()+365*60*60);
    setcookie("horaUltimaVez",date("Y-m-d H:i:s"),time()+365*60*60);

}

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
    <?php 
    if($_COOKIE['ultimaVez']==0){
echo "<h4>Bienvenido, Esta es tu primera visita a nuestra pagina!!!</h4>";
    }
    if($_COOKIE['ultimaVez']>0){
        echo "<h4>Bienvenido, Esta es tu visita numero ". $_COOKIE['ultimaVez'] ." a nuestra pagina!!!</h4>";
        echo "<h3>La ultima vez que visitaste la pagina fue el ". $_COOKIE['horaUltimaVez']." </h3>";

    }
            
    
    ?>
        <form method="POST" action="validar.php?action=logout">  
        <input type="hidden" name="tokenform" value=<?php echo "$token"; ?>>
            <input type="submit" value="Cerrar Sesion"/>
        </form>

    </body>
</html>