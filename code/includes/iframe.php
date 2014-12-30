<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
     <link rel="icon"
        type="image/png"
        href="../../images/Sway_Spa_Favicon.png" />
    <title><?php echo $title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body style="margin:0px;padding:0px;overflow:hidden">
      <div>
          <iframe src="<?php echo $url;  ?>" width="100%" scrolling="yes" height="100%" frameborder="0"/>
    </div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="../../js/iframeResizer.min.js"></script>
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


