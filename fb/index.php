<?php
session_start();

$_SESSION['referer']="fb folder " . $_SERVER['HTTP_REFERER'];
header('Location: http://statictab.com/ssh3kbd');
?>
