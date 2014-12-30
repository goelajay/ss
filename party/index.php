<?php
session_start();
$_SESSION['referer']=$_SERVER['HTTP_REFERER'];
header('Location: ../#specials');
?>
