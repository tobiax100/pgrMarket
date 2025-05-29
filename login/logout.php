<?php 
session_start();
require_once('./logeate.php');


if(isset($_SESSION['user_name'])){
    $_SESSION=array(); //limpia la session
    session_destroy(); //cierra 
    header("Location: /webcompras/index.php"); //loredirije al index
    exit();
}




?>