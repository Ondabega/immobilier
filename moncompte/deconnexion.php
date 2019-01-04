<?php
include_once "../needed.php";
$_SESSION['login']=false;
session_start();
session_destroy();
unset($_SESSION);
header("Location: ".$url."");
?>
