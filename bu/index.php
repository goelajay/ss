<?php
session_start();
$_SESSION['source']="BUQuad";
$_SESSION['referer']=$_SERVER['HTTP_REFERER'];
header('Location: ../#specials');
?>
