<?php

    if (empty($_GET)) {
        $booker = "http://www.secure-booker.com/swayspa/BookOnlineStart.aspx";
    } else {
        $booker = "http://www.secure-booker.com/swayspa/NewAppointment.aspx?TreatmentID=" . $_GET['ID'];
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Sway Aveda Spa, Boston (Kenmore Square), MA</title>
     <link rel="icon"
        type="image/png"
        href="../images/Sway_Spa_Favicon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Sway Aveda Spa in Kenmore Square (485 Commonwealth Avenue), Boston, MA providing facial, waxing, nails and massage services.  Aveda services and products!  Book online appointments" />
  </head>
  <body style="margin:0px;padding:0px;overflow:hidden">
      <?php include_once '../code/includes/googlenalytics.php';    ?>
      <div>
          <iframe src="<?php echo ($booker); ?>" width="100%" scrolling="yes" height="100%" frameborder="0"/>
    </div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/iframeResizer.min.js"></script>
		<script type="text/javascript">

			iFrameResize({
				log                     : true,                  // Enable console logging
				enablePublicMethods     : true,                  // Enable methods within iframe hosted page
				resizedCallback         : function(messageData){ // Callback fn when message is received
					$('p#callback').html(
						'<b>Frame ID:</b> '    + messageData.iframe.id +
						' <b>Height:</b> '     + messageData.height +
						' <b>Width:</b> '      + messageData.width +
						' <b>Event type:</b> ' + messageData.type
					);
				}
			});


		</script>

  </body>
</html>