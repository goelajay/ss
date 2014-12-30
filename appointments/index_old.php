<?php
require_once '../code/includes/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
if ($deviceType == 'tablet' || $deviceType == 'phone') {
    header('Location: https://app.secure-booker.com/Mobile/swayspa?&Date=02172014');
} else {
    header('Location: ../#Appointments');
}
##http://www.secure-booker.com/Incentives/BookOnlineStart.aspx
?>
