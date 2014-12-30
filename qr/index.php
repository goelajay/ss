<?php
session_start();
$_SESSION['source']=$_GET['cat'];
header('Location: ../#' . $_GET['loc']);
?>
