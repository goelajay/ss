<?php
// > 5.4
//if (session_status() == PHP_SESSION_NONE) {
//    session_start();
//}
// < 5.4
if(session_id() == '') {
    session_start();
}
?>
