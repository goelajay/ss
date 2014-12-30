<?php
session_start();

if ($_GET['cat'] == "QRBC") {
    $_SESSION['source']="Launch Folder QR Business Card";
} else {
    $_SESSION['source']="Launch Folder" ;
}
$_SESSION['referer']=$_SERVER['HTTP_REFERER'];
header('Location: ../#specials');
?>
