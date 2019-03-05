<?php

session_start();

$token=$_SESSION['token'];
if(isset($_GET['action'])){
$action=$_GET['action'];

    
//$estado=$_GET['']

switch ($action) {

    case 'login':
    
//echo "Este es el input: ".$_POST['valor'];
//echo "<br>Este es el token recibido: ". $_POST['tokenform'];
//echo "<br>Esta es el token de la sesion: ". $_SESSION['token'];
//echo "<br>";

    if ($_SESSION['token'] == $_POST['tokenform'] && $_POST['user']=='admin' && $_POST['pass']=='1234' ) {
        
        $_SESSION['user']='admin';
        $_SESSION['perfil']=1;
     
        echo "<br>";
        header('Location: inicio.php');
    
    }else{
        echo "<br>";
        echo 'Toquen Invalido';
        session_destroy();
        die();
    }
    
        break;
    
    
    case 'logout':
    //echo "Este es el token ". $_GET['token'];
    if($_SESSION['token'] == $_POST['tokenform']){
    session_destroy();
    header('Location: login.php');
}else{
    
    echo "Error de token!!!!!!!!!!!!!!!!!";
    echo "<br> <a href='login.php' >Volver</a>";
}
        break;
    
    default:
        # code...
        break;
}
}