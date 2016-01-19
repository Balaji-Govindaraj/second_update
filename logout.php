<?php
session_start();
$_SESSION['data']['username']="";
header('Location:index.php');
?>