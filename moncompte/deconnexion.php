<?php
include_once "../needed.php";
$_SESSION['login']=false;
if(!isset($_SESSION))
    {
        session_start();
    } 
session_destroy();
unset($_SESSION);
header("Location: ".$url."");
?>
