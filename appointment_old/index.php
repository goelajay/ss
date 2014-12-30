<?php
require_once '../code/includes/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
//if ($deviceType == 'tablet' || $deviceType == 'phone') {
//    header('Location: https://app.secure-booker.com/Mobile/swayspa?&Date=02172014');
//} else {
//    header('Location: ../#Appointments');
//}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:svg="http://www.w3.org/2000/svg">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <title>Sway Spa Online Appointment, Kenmore Square, Boston</title>
     <meta name="description" content="Sway Aveda Spa in Kenmore Square (485 Commonwealth Avenue), Boston, MA providing facial, waxing, nails and massage services.  Aveda services and products!" />
  </head>
  <body>
  </body>
</html>