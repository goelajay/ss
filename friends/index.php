<?php
session_start();

if ($_GET['cat'] == "special") {
    $_SESSION['source']="Special friends";
} else if ($_GET['cat'] == "fblike"){
    $_SESSION['source']="FB Likes";
} else {
    $_SESSION['source']="Friends";
}

$_SESSION['referer']=$_SERVER['HTTP_REFERER'];
header('Location: ../#specials');
?>
