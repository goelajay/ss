<?php
    include_once 'code/includes/sessionStart.php';
    $fbtablink="http://statictab.com/ssh3kbd";
?>

<!DOCTYPE HTML>
   <html xmlns="http://www.w3.org/1999/xhtml" xmlns:svg="http://www.w3.org/2000/svg">
      <head>
         <link rel="icon"
            type="image/png"
            href="images/Sway_Spa_Favicon.png" />
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
         <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
         <title>
             Aveda Sway Spa, Kenmore Square, Boston</title>
         <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
         <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
         <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
         <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
         <link href="css/carousel.css" rel="stylesheet" type="text/css" />
         <link href="css/general.css" rel="stylesheet" type="text/css" />
         <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,700' rel='stylesheet' type='text/css'>
         <script src="js/jquery.min_1.8.2.js"></script>
         <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
         <script type="text/javascript" src="js/detectmobilebrowsers.js"></script>
         <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
         <script type="text/javascript" src="js/modernizr.js"></script>
         <script type="text/javascript" src="js/js.js"></script>
         <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
         <script type="text/javascript" src="js/waypoints.min.js"></script>
         <script type="text/javascript" src="js/jquery.reveal.js"></script>
         <script type="text/javascript" src="js/formSubmit.js"></script>
         <script type="text/javascript" src="js/carousel.js"></script>
         <!--
         <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
         <script type="text/javascript" src="js/Facebook.js"></script>
         -->
         <!--[if lt IE 9]>
         <script src="js/html5shiv.js"></script>
         <script src="js/respond.src.js"></script>
         <![endif]-->
      </head>
      <body>
        <div id="fb-root"></div>

        <?php include_once 'code/includes/googlenalytics.php';    ?>
         <div class="menu">
            <div class="container clearfix">
               <!--		<div id="logo" class="fleft">
                  <a href="javascript:void(0);"><img src="images/logo.png" /></a>
                  </div>-->
               <div id="logo" class="fleft">
                  <a href="#"><img src="images/Sway_Spa_Logo.png" height="60px"/></a>
               </div>
               <div id="headerAddress" class="headerAddress fleft">
                  485 Commonwealth Av, Boston <br>
                  (617) 651-0044
               </div>
               <div class="socialn" id="socialn">
                  <ul>
                      
                     <li>
                        <a id="pin" href="http://pinterest.com/swayspa/" target="_new">Pinterest</a>
                     </li> 
                     <li>
                        <a id="googleplus" href="https://plus.google.com/100655017858754691921" target="_new">Twitter</a>
                     </li>

                     <li>
                        <a id="itwitter" href="http://www.twitter.com/swayspa" target="_new">Twitter</a>
                     </li>
                     <li>
                        <a id="ifacebook" href="http://www.facebook.com/swayspa" target="_new">Facebook</a>
                     </li>

                     <!--						<li>
                        <a id="wp" href="#">Blog</a>
                        </li>-->
                  </ul>
               </div>
               <div id="nav" class="fright">
                  <ul class="navigation">
                     <li data-slide="1" class="link">
                        Home
                     </li>
                     <li data-slide="2" id="Specials">
                        Specials
                     </li>
                     <li data-slide="4" id="Services">
                        Services
                     </li>
                     <!--						<li data-slide="6" id="Products">
                        Products

                        </li>
                        <li data-slide="8" id="Gallery">
                        Gallery

                        </li>-->
                     <li data-slide="10" id="Contact">
                        Contact
                     </li>
                     <div class="clear"></div>
                  </ul>
               </div>
            </div>
         </div>
         <div class="submenu submenu-services" id="submenu_services">
            <ul class="submenu-services">
               <li data-slide="53">
                  Nails
               </li>
               <li data-slide="52">
                  Massage
               </li>
               <li data-slide="51">
                  Waxing
               </li>
               <li data-slide="50">
                  Skin Care
               </li>
            </ul>
         </div>
         <div class="submenu" id="submenu_contact">
            <ul style="padding-right:0;"  class="submenu-contact">
               <li data-slide="Appointments">
                  Appointment
               </li>
               <!--				<li data-slide="22">
                  Directions
                  </li>-->
               <li data-slide="10">
                  Contact Us
               </li>
            </ul>
         </div>


		
    
    
           <!-- <div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
            
            
            <div class="padding_slide1">
               
               <div class="container clearfix">
                  <div id="content" class="grid_12">
                  <div class="filtr_bg">
                        <p>
                           In Kenmore Square this Summer!
                        </p>

                        <h2>Pre launch $20 Gift Certificate!
                           <br/>
                           Grab yours now!
                           <br />
                        </h2>
                        
                     </div>
                     <a class="button" title="" data-slide="2">Read More</a>
                     
                     
                  </div>
                  
               </div>
            </div>-->
            
            <div id="myCarousel" class="carousel slide">

        <!-- Indicators 
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner slide" id="slide1" data-slide="2">
            <div class="item active">
                <div class="fill" style="background-image:url('images/slide1_bg.jpg');"></div>
                <div class="carousel-caption">
                    <div class="filtr_bg">
                        <p>
                           Sway Aveda Spa!
                        </p>

                        <h2>Free Gift Certificate!
                           <br/>
                           Grab yours now!
                        </h2>
                        
                        
                     </div>
                     <a class="button" title="" data-slide="2">Read More</a>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slideshow/1408/CarryingAveda.jpg');"></div>
                <div class="carousel-caption">
                    <div class="filtr_bg">
                        <p>
                           <a href="http://www.aveda.com/supercat/index.tmpl?CATEGORY_ID=CAT5352" target="_blank"><img src="images/shopnow.png" border="0"></a>
                        </p>
                     </div>
                
                </div>
               
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slideshow/1408/LaunchAvedaOff.jpg');"></div>
                <div class="carousel-caption">
                    <div class="filtr_bg">
                     </div>
                     <a class="button" title="10PercentOff" id="10PercentOff" data-slide="10">More info</a>
                </div>
            </div>
        </div>

         Controls 
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>
    


         <div class="slide" id="specials" data-slide="2" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="signUp">
                  <h1>Free gift certificate</h1>
                  <!--			<h4>Pre-launch gift certificate</h4>-->
               </div>
               <div id="content" class="grid_12">
                  <!--			<img class="about_img" src="images/about_img1.jpg" alt="" />
                     <h4>Our awesomeness</h4>-->
                  <div id="form-result">
                        <p /> <b>Wrap yourself in relaxation</b> at Aveda Sway Spa!
                        <br /><br />
                        <?php
                        if ($_SESSION['raffle'] ) {
                            ?>
                            Enter into our Back2Boston raffle from <a href="https://twitter.com/OnlyInBOS" target="_new">@OnlyInBos</a> for your choice of $50 Facial gift certificate, $40 Massage gift certificate or $25 Mani-Pedi gift certificate!
                            <?php
                        } else {
                            ?>
                            We are giving away free gift certificates!  Just fill in the form below and we will email you the gift certificate before the launch.
                            <?php
                        }
                        ?>

                     <p>
                          
                     </p>
                  </div>
               </div>
               <div class="clear"></div>

               <div class="subscribe_form_to_be_created">
                  <div id="subscribe_form_note">
                     <div id="subscribe_form_note_success" class="notification_ok">
                        Thanks a lot for your time, just one more step!
                        <br /><br />Please check your mail box and look for email from sweta @ swayspa.com!
                        Click on the link to confirm your email as indicated in the email and you will be all set!  Please note that unless you confirm your email, our system won't be able to send you the gift certificate.
                        <br /><br />
                     </div>
<!--                     <div id="subscribe_form_note_success_update" class="notification_ok">
                        Thanks a lot for visiting us again!
                        <br /><br />Your preferences have been updated.
                          If you would like to meet us at <a taget="_new" href="https://twitter.com/CornwallsPub" target="_new">Cornwall's Pub</a> (<a href="https://plus.google.com/events/c011m6b8cd6iqd1rm1hou9fb5pg" target="_new">Friday Oct 18th 7:00 PM</a>), please send us any of the following tweets by clicking the links or send us a message on <a href="http://www.facebook.com/swayspa" target="_new">Facebook</a> or just send us an email at <a href="mailto:sweta@swayspa.com">sweta @ swayspa.com</a>.
                          <ul>
                              <li>- SwaySpa I would love to stop by @CornwallsPub on Oct 18th (<a taget="_new" href="https://twitter.com/home?status=@SwaySpa I would love to stop by @CornwallsPub on Oct 18th">tweet</a>)</li>
                              <li>- DM (personal message) @SwaySpa I would love to stop by @CornwallsPub (<a taget="_new" href="https://twitter.com/home?status=DM @SwaySpa I would love to stop by @CornwallsPub">tweet</a>)</li>
                              <li>- @SwaySpa How do I get the coupon for Oct 18th at @CornwallsPub? (<a taget="_new" href="https://twitter.com/home?status=@SwaySpa How do I get the coupon for Oct 18th at @CornwallsPub?">tweet</a>)</li>
                          </ul>
                        Please don't hesitate to contact us at <a href="mailto:sweta@swayspa.com">sweta @ swayspa.com</a> if you have any question!
                        <br /><br />
                     </div>-->
                     <div id="subscribe_form_note_success_update" class="notification_ok">
                        Thanks a lot for visiting us again!
                        <br /><br />Your preferences have been updated.
                          If you are on Twitter, would love to get connected there.  And we will truly appreciate if you can tweet any of the following tweets for you!
                          <ul>
                              <li>- Sway Spa is giving away free gift certificates! <a taget="_new" href="https://twitter.com/home?status=@SwaySpa is giving away free gift certificates"><img src="images/tweet-button.png" /></a></li>
                              <li>- I just signed up for a free gift certificate from Sway Spa, grab yours now! <a taget="_new" href="https://twitter.com/home?status=I just signed up for a free gift certificate from @SwaySpa, grab yours now!"><img src="images/tweet-button.png" /></a></li>
                              <li>- SwaySpa is opened in Kemore Square! Grab your free gift certificate! <a taget="_new" href="https://twitter.com/home?status=@SwaySpa is opened in Kemore Square! Grab your free gift certificate!"><img src="images/tweet-button.png" /></a></li>
                              <li>- Or just compose your own tweet here! <a taget="_new" href="https://twitter.com/home?status=@SwaySpa"><img src="images/tweet-button.png" /></a></li>
                          </ul>
                        Please don't hesitate to contact us at <a href="mailto:sweta@swayspa.com">sweta @ swayspa.com</a> if you have any question!
                        <br /><br />
                     </div>

                    <div id="subscribe_form_note_error" class="notification_error"></div>
                  </div>
                  <div id="subscribe_form-fields">
                     <form id="ajax-subscribe_form" action="">
                        <input type="text" name="FNAME" value="" placeholder="First Name *" />
                        <input type="text" name="LNAME" value="" placeholder="Last Name" />
                        <input type="text" name="EMAIL" value="" placeholder="Email *" />
                        <br />
                        <?php
                        if ($_SESSION['raffle'] == "true") {
                            ?>
                            <input type="checkbox" name="RAFFLE" value="Sep2014" checked="true">Yes, add me to the Back2Boston Raffle!  Everyone is a winner!</input>
                            <br />
                        <?php
                        }
                        ?>
                        <br />
                        <b>Free Gift Certificate:</b>
                        <br />
                        <?php
                            if ($_SESSION['source'] == "Special friends") {
                                ?>
                        <input type="radio" name="GCERT" value="$50 towards any facial service" checked>
                        &nbsp;<STRIKE>$20</STRIKE> $50 towards any facial service</input>
                        <br />
                        <input type="radio" name="GCERT" value="$15 towards any massage service" >
                        &nbsp;$15 towards any massage service</input>
                        <br />
                        <input type="radio" name="GCERT" value="$12 towards mani-pedi" >
                        &nbsp;<STRIKE>$8</STRIKE> $12 towards mani-pedi</input>

                        <?php

                            } else if ($_SESSION['source'] == "celebrate") {
                           ?>
                        <input type="radio" name="GCERT" value="$15 towards any facial service" checked>
                        &nbsp;<STRIKE>$10</STRIKE> $15 towards any facial service</input>
                        <br />
                        <input type="radio" name="GCERT" value="$15 towards any massage service" >
                        &nbsp;<STRIKE>$10</STRIKE> $15 towards any massage service</input>
                        <br />
                        <input type="radio" name="GCERT" value="$10 towards mani-pedi" >
                        &nbsp;<STRIKE>$8</STRIKE> $10 towards mani-pedi</input>
                        <?php
                           } else {
                           ?>
                        <input type="radio" name="GCERT" value="$10 towards any facial service" checked>
                        &nbsp;$10 towards any facial service</input>
                        <br />
                        <input type="radio" name="GCERT" value="$10 towards any massage service" >
                        &nbsp;$10 towards any massage service</input>
                        <br />
                        <input type="radio" name="GCERT" value="$8 towards mani-pedi" >
                        &nbsp;$8 towards mani-pedi</input>

                          <?php

                           }
                        ?>
                        <br /><br />
<!--
                        <b>Delivery Mode:</b>
                        <br />
                        <input type="radio" name="DMODE" value="Email me the gift certificate" checked>
                        &nbsp;Email me the gift certificate</input>
                        <br />
                        <input type="radio" name="DMODE" value="Send me via postal mail" >
                        &nbsp;Send me via postal mail</input>
                        <br /><br />
                        <div id="divAddress" style="display: none">
                           <input type="text" name="addr1" value="" placeholder="Street Address *" style="margin-left:0px;" />
                           <input type="text" name="addr2" value="" placeholder="Address Line 2" />
                           <br />
                           <input type="text" name="city" value="" placeholder="City *" style="margin-left:0px;"/>
                           <input type="text" name="state" value="" placeholder="State *" />
                           <input type="text" name="zip" value="" placeholder="Zip code *" />
                           <br/>
                        </div> -->
                           <input type="hidden" name="REFERREDBY" value="
                           <?php if ($_SESSION['referer'] != null) {
                                    echo $_SESSION['referer'];
                                } else
                                {
                                  echo $_SERVER['HTTP_REFERER'];
                                 }
                             ?>" />
                           <input type="hidden" name="SOURCE" value="<?=$_SESSION['source']?>" />
<!--                           <div>(Instructions for coupon for Cornwall's for Friday October 18th will be sent in the email.  <a href="#party">Details here</a>)</div> -->
                        <div class="clear"></div>
                        <input type="submit" id="contact_btn_subscribe" class="contact_btn_subscribe send_btn" value="Send me the gift certificate!" />
                        <input type="reset" class="contact_btn_subscribe" value="Clear Form" />
                        <div class="clear"></div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

         <div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
            <div class="effect_2 padding_slide3">
               <div class="container clearfix">
                  <div id="content" class="grid_12">
                     <p>
                        (617) 651-0044
                     </p>
                  </div>
               </div>
            </div>
         </div>

        <!-- If you ever change the name of this slide, it is used to hide all nondisplayslide -->
         <div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Our Services</span></h1>
                  <!--					<h2>Here are our services.  Add somme nice text here.</h2>-->
                  <div>
                     <!-- Services_block -->
                     <ul class="gallery-list">
                        <li data-slide="50" class="grid_3">
                           <a>
                              <div class="hover_img">
                                 <img src="images/services/skincare.jpg" alt="" />
                              </div>
                              <div class="portfolio_descr">
                                 <p>
                                    Skin Care
                                 </p>
                                 <span>An elevated experience with remarkable results. Each facial pampers with a warm mitt hand treatment, a heated pad for comfort, post-extraction cool stone application and our specialized facial massage. </span>
                              </div>
                           </a>
                        </li>
                        <li data-slide="51" class="grid_3">
                           <a>
                              <div class="hover_img">
                                 <img src="images/services/waxing.jpg" alt="" />
                              </div>
                              <div class="portfolio_descr">
                                 <p>
                                    Waxing
                                 </p>
                                 <span> Our technicians take the utmost care to protect the health and elasticity of the skin. The wax is applied warm, then removed gently, leaving skin absolutely smooth. This refined technique is comfortable and result-oriented.
                                 </span>
                              </div>
                           </a>
                        </li>
                        <li data-slide="52" class="grid_3">
                           <a>
                              <div class="hover_img">
                                 <img src="images/services/massage.jpg" alt="" />
                              </div>
                              <div class="portfolio_descr">
                                 <p>
                                    Massage
                                 </p>
                                 <span> For skin that radiates with health and is soft to the touch. Carefully balanced to both deeply cleanse and replenish, our body treatments lift the veil of dullness and dryness to restore hydrated silkiness to skin.
                                 </span>
                              </div>
                           </a>
                        </li>
                        <li data-slide="53" class="grid_3">
                           <a>
                              <div class="hover_img">
                                 <img src="images/services/nails.jpg" alt="" />
                              </div>
                              <div class="portfolio_descr">
                                 <p>
                                    Nails
                                 </p>
                                 <span> Manicure and pedicure services soothe with a warm neck pillow. Skin exfoliation and a hydrating massage are extended to the elbow for manicures and to the knee for pedicures, which also include a customized foot bath with essential oil. A paraffin treatment seals in moisture for softer hands and feet. Nails are polished to perfection. </span>
                              </div>
                           </a>
                        </li>
                        <div class="clear"></div>
                     </ul>
                     <!-- //Services_block -->
                  </div>
               </div>
            </div>
         </div>
         <!-------------------------------------------------------------------------->

         <div class="slide" id="slide50" data-slide="50" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Skin Care</span></h1>
                  <h2></h2>
               </div>
                While we work to make your online experience as smooth as your visit to our spa, please use <a href="http://swayspa.com/appointments">this link</a> to look at our services and book appointments.
<!--              <div class="comingsoon">
                 Coming Soon
              </div>-->
               <div class="grid_9">

                  <!--
                     <div class="servicename">
                         Escentika Signature facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $50)
                     </div>
                     <div class="servicedesc">
                         Our signature facial is beneficial for all skin types. This facial leaves your skin radiant with a healthy glow by giving a deep pore cleansing, exfoliation, steaming, massage* and a soothing mask.
                     </div>
                     <div class="servicename">
                     Express facial
                     </div>
                     <div class="servicecost">
                     (30 minutes $30)
                     </div>
                     <div class="servicedesc">
                     A quick and refreshing facial that cleanses, tones, exfoliates and moisturizes your skin.
                     </div>
                     <div class="servicename">
                     Collagen blanket facial
                     </div>
                     <div class="servicecost">
                     (75 minutes $60)
                     </div>
                     <div class="servicedesc">
                     This is a great treatment for dehydrated skin (includes ampoule, enzyme exfoliant and massage*). Collagen simulating serum and hydrating blanket help plump skin and refine, firm and enhance skin elasticity leaving it softer, smoother and more supple.
                     </div>
                     <div class="servicename">
                     Compulift facial
                     </div>
                     <div class="servicecost">
                     (80 minutes $65)
                     </div>
                     <div class="servicedesc">
                     This slows down the aging process. When started early enough it may delay or eliminate the need for more invasive treatment. It reaches well below the surface of your skin to the epidermis, dermis and muscles to delay premature aging and restore a healthy, youthful glow. Improvement is generally seen immediately. An initial series of 6 to 8 treatments is recommended. (Only Compulift treatment with ampoules is $35)
                     </div>
                     <div class="servicename">
                     Glycolic facial
                     </div>
                     <div class="servicecost">
                     (70 minutes $50)
                     </div>
                     <div class="servicedesc">
                     This facial will gently, yet effectively exfoliate the skin. With each treatment, it will accelerate your skin turnover to reduce the appearance of fine lines and dehydration leaving your skin smooth. Each treatment will include a recovery mask and corrective serums. Recommended as a series of 4-6 treatments for optimum results. (Only Glycolic treatment is $25)
                     </div>
                     <div class="servicename">
                     Anti aging facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $60)
                     </div>
                     <div class="servicedesc">
                     This treatment uses anti-aging treatment products to significantly change all types of aging skin.
                     </div>
                     <div class="servicename">
                     Back facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $60)
                     </div>
                     <div class="servicedesc">
                     A deep cleansing treatment for the back including an exfoliation, massage, steam and mask followed by a hydrating cream.
                     </div>
                     <div class="servicename">
                     Eye treatment
                     </div>
                     <div class="servicecost">
                     (30 minutes $20)
                     </div>
                     <div class="servicedesc">
                     This treatment help reduce wrinkles, puffiness and darkness around eyes using compu-lift and collagen.
                     <div class="servicename">
                     Glycolic add-on
                     </div>
                     <div class="servicecost">
                     (15 minutes $10)
                     <div class="servicename">
                     Enzyme add-on
                     </div>
                     <div class="servicecost">
                     (10 minutes $10)
                     <div class="servicename">
                     Collagen blanket add-on
                     </div>
                     <div class="servicecost">
                     (20 minutes $10)
                     </div> -->
               </div>
               <div class="clear"></div>
            </div>
         </div>
         <!-------------------------------------------------------------------------->

         <div class="slide" id="slide50" data-slide="51" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Waxing</span></h1>
                  <h2></h2>
               </div>
<!--              <div class="comingsoon">
                 Coming Soon
              </div>-->
                While we work to make your online experience as smooth as your visit to our spa, please use <a href="http://swayspa.com/appointments">this link</a> to look at our services and book appointments.
               <div class="grid_9">
                  <!--
                     <div class="servicename">
                         Escentika Signature facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $50)
                     </div>
                     <div class="servicedesc">
                         Our signature facial is beneficial for all skin types. This facial leaves your skin radiant with a healthy glow by giving a deep pore cleansing, exfoliation, steaming, massage* and a soothing mask.
                     </div>
                     <div class="servicename">
                     Express facial
                     </div>
                     <div class="servicecost">
                     (30 minutes $30)
                     </div>
                     <div class="servicedesc">
                     A quick and refreshing facial that cleanses, tones, exfoliates and moisturizes your skin.
                     </div>
                     <div class="servicename">
                     Collagen blanket facial
                     </div>
                     <div class="servicecost">
                     (75 minutes $60)
                     </div>
                     <div class="servicedesc">
                     This is a great treatment for dehydrated skin (includes ampoule, enzyme exfoliant and massage*). Collagen simulating serum and hydrating blanket help plump skin and refine, firm and enhance skin elasticity leaving it softer, smoother and more supple.
                     </div>
                     <div class="servicename">
                     Compulift facial
                     </div>
                     <div class="servicecost">
                     (80 minutes $65)
                     </div>
                     <div class="servicedesc">
                     This slows down the aging process. When started early enough it may delay or eliminate the need for more invasive treatment. It reaches well below the surface of your skin to the epidermis, dermis and muscles to delay premature aging and restore a healthy, youthful glow. Improvement is generally seen immediately. An initial series of 6 to 8 treatments is recommended. (Only Compulift treatment with ampoules is $35)
                     </div>
                     <div class="servicename">
                     Glycolic facial
                     </div>
                     <div class="servicecost">
                     (70 minutes $50)
                     </div>
                     <div class="servicedesc">
                     This facial will gently, yet effectively exfoliate the skin. With each treatment, it will accelerate your skin turnover to reduce the appearance of fine lines and dehydration leaving your skin smooth. Each treatment will include a recovery mask and corrective serums. Recommended as a series of 4-6 treatments for optimum results. (Only Glycolic treatment is $25)
                     </div>
                     <div class="servicename">
                     Anti aging facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $60)
                     </div>
                     <div class="servicedesc">
                     This treatment uses anti-aging treatment products to significantly change all types of aging skin.
                     </div>
                     <div class="servicename">
                     Back facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $60)
                     </div>
                     <div class="servicedesc">
                     A deep cleansing treatment for the back including an exfoliation, massage, steam and mask followed by a hydrating cream.
                     </div>
                     <div class="servicename">
                     Eye treatment
                     </div>
                     <div class="servicecost">
                     (30 minutes $20)
                     </div>
                     <div class="servicedesc">
                     This treatment help reduce wrinkles, puffiness and darkness around eyes using compu-lift and collagen.
                     <div class="servicename">
                     Glycolic add-on
                     </div>
                     <div class="servicecost">
                     (15 minutes $10)
                     <div class="servicename">
                     Enzyme add-on
                     </div>
                     <div class="servicecost">
                     (10 minutes $10)
                     <div class="servicename">
                     Collagen blanket add-on
                     </div>
                     <div class="servicecost">
                     (20 minutes $10)
                     </div> -->
               </div>
               <div class="clear"></div>
            </div>
         </div>
         <!-------------------------------------------------------------------------->

         <div class="slide" id="slide50" data-slide="52" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Massage</span></h1>
                  <h2></h2>
               </div>
                              While we work to make your online experience as smooth as your visit to our spa, please use <a href="http://swayspa.com/appointments">this link</a> to look at our services and book appointments.
<!--                  <div class="comingsoon">
                		 Coming Soon
              		</div>-->
               
                  <!--
                     <div class="servicename">
                         Escentika Signature facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $50)
                     </div>
                     <div class="servicedesc">
                         Our signature facial is beneficial for all skin types. This facial leaves your skin radiant with a healthy glow by giving a deep pore cleansing, exfoliation, steaming, massage* and a soothing mask.
                     </div>
                     <div class="servicename">
                     Express facial
                     </div>
                     <div class="servicecost">
                     (30 minutes $30)
                     </div>
                     <div class="servicedesc">
                     A quick and refreshing facial that cleanses, tones, exfoliates and moisturizes your skin.
                     </div>
                     <div class="servicename">
                     Collagen blanket facial
                     </div>
                     <div class="servicecost">
                     (75 minutes $60)
                     </div>
                     <div class="servicedesc">
                     This is a great treatment for dehydrated skin (includes ampoule, enzyme exfoliant and massage*). Collagen simulating serum and hydrating blanket help plump skin and refine, firm and enhance skin elasticity leaving it softer, smoother and more supple.
                     </div>
                     <div class="servicename">
                     Compulift facial
                     </div>
                     <div class="servicecost">
                     (80 minutes $65)
                     </div>
                     <div class="servicedesc">
                     This slows down the aging process. When started early enough it may delay or eliminate the need for more invasive treatment. It reaches well below the surface of your skin to the epidermis, dermis and muscles to delay premature aging and restore a healthy, youthful glow. Improvement is generally seen immediately. An initial series of 6 to 8 treatments is recommended. (Only Compulift treatment with ampoules is $35)
                     </div>
                     <div class="servicename">
                     Glycolic facial
                     </div>
                     <div class="servicecost">
                     (70 minutes $50)
                     </div>
                     <div class="servicedesc">
                     This facial will gently, yet effectively exfoliate the skin. With each treatment, it will accelerate your skin turnover to reduce the appearance of fine lines and dehydration leaving your skin smooth. Each treatment will include a recovery mask and corrective serums. Recommended as a series of 4-6 treatments for optimum results. (Only Glycolic treatment is $25)
                     </div>
                     <div class="servicename">
                     Anti aging facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $60)
                     </div>
                     <div class="servicedesc">
                     This treatment uses anti-aging treatment products to significantly change all types of aging skin.
                     </div>
                     <div class="servicename">
                     Back facial
                     </div>
                     <div class="servicecost">
                     (60 minutes $60)
                     </div>
                     <div class="servicedesc">
                     A deep cleansing treatment for the back including an exfoliation, massage, steam and mask followed by a hydrating cream.
                     </div>
                     <div class="servicename">
                     Eye treatment
                     </div>
                     <div class="servicecost">
                     (30 minutes $20)
                     </div>
                     <div class="servicedesc">
                     This treatment help reduce wrinkles, puffiness and darkness around eyes using compu-lift and collagen.
                     <div class="servicename">
                     Glycolic add-on
                     </div>
                     <div class="servicecost">
                     (15 minutes $10)
                     <div class="servicename">
                     Enzyme add-on
                     </div>
                     <div class="servicecost">
                     (10 minutes $10)
                     <div class="servicename">
                     Collagen blanket add-on
                     </div>
                     <div class="servicecost">
                     (20 minutes $10)
                     </div>
                     -->
               </div>
               <div class="clear"></div>
            </div>
         </div>
         <!-------------------------------------------------------------------------->

         <div class="slide" id="slide50" data-slide="53" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Nails</span></h1>
                  <h2></h2>
               </div>
                While we work to make your online experience as smooth as your visit to our spa, please use <a href="http://swayspa.com/appointments">this link</a> to look at our services and book appointments.
<!--               <div class="comingsoon">
                  Coming Soon
               </div>-->
               <!--
                  <div class="grid_9">
                                                  <div class="servicename">
                                                      Escentika Signature facial
                                                  </div>
                                                  <div class="servicecost">
                                                  (60 minutes $50)
                                                  </div>
                                                  <div class="servicedesc">
                                                      Our signature facial is beneficial for all skin types. This facial leaves your skin radiant with a healthy glow by giving a deep pore cleansing, exfoliation, steaming, massage* and a soothing mask.
                                                  </div>
                                                  <div class="servicename">
                                                  Express facial
                                                  </div>
                                                  <div class="servicecost">
                                                  (30 minutes $30)
                                                  </div>
                                                  <div class="servicedesc">
                                                  A quick and refreshing facial that cleanses, tones, exfoliates and moisturizes your skin.
                                                  </div>
                                                  <div class="servicename">
                                                  Collagen blanket facial
                                                  </div>
                                                  <div class="servicecost">
                                                  (75 minutes $60)
                                                  </div>
                                                  <div class="servicedesc">
                                                  This is a great treatment for dehydrated skin (includes ampoule, enzyme exfoliant and massage*). Collagen simulating serum and hydrating blanket help plump skin and refine, firm and enhance skin elasticity leaving it softer, smoother and more supple.
                                                  </div>
                                                  <div class="servicename">
                                                  Compulift facial
                                                  </div>
                                                  <div class="servicecost">
                                                  (80 minutes $65)
                                                  </div>
                                                  <div class="servicedesc">
                                                  This slows down the aging process. When started early enough it may delay or eliminate the need for more invasive treatment. It reaches well below the surface of your skin to the epidermis, dermis and muscles to delay premature aging and restore a healthy, youthful glow. Improvement is generally seen immediately. An initial series of 6 to 8 treatments is recommended. (Only Compulift treatment with ampoules is $35)
                                                  </div>
                                                  <div class="servicename">
                                                  Glycolic facial
                                                  </div>
                                                  <div class="servicecost">
                                                  (70 minutes $50)
                                                  </div>
                                                  <div class="servicedesc">
                                                  This facial will gently, yet effectively exfoliate the skin. With each treatment, it will accelerate your skin turnover to reduce the appearance of fine lines and dehydration leaving your skin smooth. Each treatment will include a recovery mask and corrective serums. Recommended as a series of 4-6 treatments for optimum results. (Only Glycolic treatment is $25)
                                                  </div>
                                                  <div class="servicename">
                                                  Anti aging facial
                                                  </div>
                                                  <div class="servicecost">
                                                  (60 minutes $60)
                                                  </div>
                                                  <div class="servicedesc">
                                                  This treatment uses anti-aging treatment products to significantly change all types of aging skin.
                                                  </div>
                                                  <div class="servicename">
                                                  Back facial
                                                  </div>
                                                  <div class="servicecost">
                                                  (60 minutes $60)
                                                  </div>
                                                  <div class="servicedesc">
                                                  A deep cleansing treatment for the back including an exfoliation, massage, steam and mask followed by a hydrating cream.
                                                  </div>
                                                  <div class="servicename">
                                                  Eye treatment
                                                  </div>
                                                  <div class="servicecost">
                                                  (30 minutes $20)
                                                  </div>
                                                  <div class="servicedesc">
                                                  This treatment help reduce wrinkles, puffiness and darkness around eyes using compu-lift and collagen.
                                                  <div class="servicename">
                                                  Glycolic add-on
                                                  </div>
                                                  <div class="servicecost">
                                                  (15 minutes $10)
                                                  <div class="servicename">
                                                  Enzyme add-on
                                                  </div>
                                                  <div class="servicecost">
                                                  (10 minutes $10)
                                                  <div class="servicename">
                                                  Collagen blanket add-on
                                                  </div>
                                                  <div class="servicecost">
                                                  (20 minutes $10)
                                                  </div>
                  -->
            </div>
            <div class="clear"></div>
         </div>
         </div>
         <!-------------------------------------------------------------------------->
         <!--
            <div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
            <div class="effect_2 padding_slide3">
            <div class="container clearfix">

            <div id="content" class="grid_12">
            <p>Lorem ipsum dolor sit<br> amet, consectetur<br> adipiscing elit.</p>
            </div>

            </div>
            </div>
            </div>
            -->
         <!--		<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
            <div class="container clearfix">

            	<div id="content" class="grid_12">
            		<h1>Products</h1>
            		<h2>List the products here</h2>
            	</div>
            	<div id="content" class="grid_12">
            		<h4>Aveda</h4>
            		<p>
            			Place holder for products.
            		</p>
            		Should
            		<br />
            		be
            		<br />
            		big
            		<br />
            		enough
            		<br />
            		to
            		<br />
            		cover
            		<br />
            		the
            		<br />
            		next
            		<br />
            		slide's
            		<br />
            		picture
            		<br />
            		Should
            		<br />
            		be
            		<br />
            		big
            		<br />
            		enough
            		<br />
            		to
            		<br />
            		cover
            		<br />
            		the
            		<br />
            		next
            		<br />
            		slide's
            		<br />
            		picture
            		<br />

            	</div>
            </div>
            </div>

            <div class="slide" id="slide7" data-slide="7" data-stellar-background-ratio="0.5">
            <div class="effect_2 padding_slide7">
            	<div class="container clearfix">

            		<div id="content" class="grid_12">
            			<span>Integer dapibus, tellus non
            				<br>
            				laoreet gravida, neque turpis</span>
            		</div>

            	</div>
            </div>
            </div>-->
         <!--		<div class="slide" id="slide8" data-slide="8" data-stellar-background-ratio="0.5">
            <div class="container clearfix">

            	<div id="content" class="grid_12">
            		<h1><span>Gallery</span></h1>
            		<h2>This needs to be redesigned.  Just one big image scrolling image</h2>
            	</div>
            	<div class="clear"></div>-->
         <!-- Gallery Block -->
         <!--				<div>
            <ul class="gallery-list">
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/1.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/1.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/2.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/2.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/3.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/3.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/4.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/4.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/5.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/5.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/6.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/6.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/7.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/7.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<li class="grid_3">
            		<div class="hover_img">
            			<img class="gallery_hover" src="images/gallery_h.png" />
            			<img src="images/gallery/8.jpg" alt="" />
            			<span class="portfolio_zoom"><a href="images/gallery/full/8.jpg" rel="prettyPhoto[portfolio1]"></a></span>
            		</div>
            	</li>
            	<div class="clear"></div>
            </ul>-->
         <!-- //gallery_block -->
         <!--				</div>
            </div>
            </div>-->

         <div class="slide" id="slide9" data-slide="9" data-stellar-background-ratio="0.5">
            <div class="effect_2 padding_slide9">
               <div class="container clearfix">
                  <div id="content" class="grid_12">
                     <span>Skin Care, Massage
                     <br>
                     Waxing and Nails</span>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Contact</span></h1>
                  <h2></h2>
               </div>
               <div class="clear"></div>
               <div class="grid_9">
                  <div class="contact_form">
                     <div id="note"></div>
                     <div id="fields">
                        <form id="ajax-contact-form" action="">
                           <input type="text" name="name" value="" placeholder="Name" />
                           <input type="text" name="subject" value="" id="contactSubject" placeholder="Subject" />
                           <input type="text" name="email" value="" placeholder="Email" />
                           <textarea name="message" id="message" placeholder="Message"></textarea>
                           <div class="clear"></div>
                            <input type="submit" id="contact_btn" class="contact_btn send_btn" value="Send" />
                            <input type="reset" class="contact_btn" value="Clear Form" />
                           <div class="clear"></div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="grid_3 contact_det_block omega">
                  <p>
                     Fill up this simple form and we will get in touch with you!
                  </p>
                  <ul class="foot_block_intouch">
                     <li class="touch_phone">
                        <p>
                           (617) 651-0044
                        </p>
                     </li>
                     <li class="touch_clock">
                        <p>
                           Tue - Fri 10:30 am - 6:30 pm
                           <br />
                           Sat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:30 am - 5:00 pm
                           <br />
                           Sun&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11:00 am - 4:00 pm
                        </p>
                     </li>
                     <li class="touch_mail">
                        <a href="mailto:contact@swayspa.com">contact@swayspa.com</a>
                     </li>
                     <li class="touch_site">
                        <a href="javascript:void(0);">www.swayspa.com</a>
                     </li>
                     <li class="touch_adress">
                        <p>
                           Boston, MA, 02215
                        </p>
                     </li>
                  </ul>
               </div>
               <div class="clear"></div>
            </div>
            <div id="map_block">
                <a href="https://www.google.com/maps/place/Sway+Spa/@42.3492149,-71.0941038,17z/data=!3m1!4b1!4m2!3m1!1s0x89e37a03291ae38f:0x68298089b70fc06e" target="_new"><img src="images/googlemap_2014_02_14.png" ></img></a>
               <!--            <iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=485+Commonwealth+Avenue,+Boston,+MA&amp;aq=0&amp;oq=485+comm&amp;sll=42.036922,-71.683501&amp;sspn=2.770071,5.817261&amp;ie=UTF8&amp;hq=&amp;hnear=485+Commonwealth+Ave,+Boston,+Suffolk,+Massachusetts+02215&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=42.349077,-71.094074&amp;output=embed"></iframe>        
               <iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                  src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=485+Commonwealth+Ave,+Boston,+MA&hl=en&sll=42.036922,-71.683501&sspn=2.770071,5.806274&oq=485&hnear=485+Commonwealth+Ave,+Boston,+Suffolk,+Massachusetts+02215&t=m&z=16&amp;output=embed"></iframe>
               <!--            <iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=los+angeles&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=53.080379,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+California&amp;ll=34.052234,-118.243685&amp;spn=0.003427,0.006968&amp;t=m&amp;z=14&amp;output=embed"></iframe> -->
            </div>
         </div>
         
         

<!--         <div class="slide nondisplayslide" id="Appointments" data-slide="Appointments" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Appointments</span></h1>
                  <h2></h2>
               </div>
                We aren't ready for appointments yet but we are are giving away <b>20%</b> off gift cards.  Please use code <i>Christmas</i> during checkout if the discount is not already applied!
                Happy holidays!<br>
             <iframe id="appointments" name="appointments" src="https://www.secure-booker.com/swayspa/BookOnlineStart.aspx?SpecialDiscountCode=Christmas" class="spaBookerIFrame" frameborder="0"/>
               <div class="clear"></div>
               				<div class="grid_9" >
                  <iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.secure-booker.com/pineappledayspa/MakeAppointment/Search.aspx" width="100%"/>
                  </div>
            </div>
         </div>-->

<!--         <div class="slide" id="Gifts" data-slide="Gifts" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
                Thanks for your interest in our gift cards!  For purchase before Christmas, we are giving <b>20 %</b> off your purchase.  Please use code <i>Christmas</i> during checkout if the discount is not already applied!
                We wish you a very happy holidays!
                <br />
                <font size="-1"> Note: We plan to open around end of January but there is always a possibility in new business for delays.
                Please <a href="#Contact">contact us</a> before buying the gift card if this is for an event and you already have a date in mind.  </font>
             <iframe id="gifts" name="gifts" src="https://www.secure-booker.com/swayspa/ShippableGiftCard.aspx?SpecialDiscountCode=Christmas" class="spaBookerIFrame" frameborder="0"/>
               <div class="clear"></div>
            </div>
         </div>-->

<!--         <div class="slide nondisplayslide" data-slide="Appointments" id="Appointments" data-stellar-background-ratio="0.5" align="center">
             <iframe id="appointments" name="appointments" src="http://www.secure-booker.com/swayspa/BookOnlineStart.aspx" class="appointmentIframe" frameborder="0"/>
               <div class="clear"></div>
         </div>
         -->
         <!-------------------------------------------------------------------------->
         <div class="slide nondisplayslide" data-slide="Subscribed" id="Subscribed" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Thank you!</span></h1>
                  <h2></h2>
               </div>
               <div class="Subscribed">
                  Your request for Sway Spa's gift certificate has been received.
                  <br /><br />
                  Thanks for trusting us!  Once again we promise not to spam your mail box and every email that we send, will have the option to unsubscribe.  Looking forward to seeing you soon in our spa!
                  <br /><br />
                  Please look out for a confirmation email from us within the next few minutes.  If you are on Twitter, will truly appreciate if you can send out one of the following tweets:
                  <br />
                  <ul>
                      <li>- Sway Spa is giving away free pre-launch <a taget="_new" href="https://twitter.com/home?status=@SwaySpa is giving away free pre-launch gift certificates!" target="_new">gift certificates!</a></li>
                      <li>- I just signed up for a free pre-launch gift certificate from Sway Spa, grab <a taget="_new" href="https://twitter.com/home?status=I just signed up for a free pre-launch gift certificate from @SwaySpa, grab yours now!" target="_new">yours now!</a></li>
<!--                      <li>- Just heard that Sway Spa is doing a raffle!<a taget="_new" href="https://twitter.com/home?status=Just heard that @SwaySpa is doing a raffle!" target="_new">gift cards!</a></li>-->
                      <li>- Sway Spa is coming to Kenmore Square soon!  Grab your free pre-launch <a taget="_new" href="https://twitter.com/home?status=@SwaySpa is coming to Kenmore Square soon!  Grab your free pre-launch gift certificate!" target="_new">gift certificate!</a></li>
                      <li>- Or just compose your own tweet <a taget="_new" href="https://twitter.com/home?status=@SwaySpa" target="_new">here</a></li>
                  </ul>
                  <!--
                  If you would like to meet us at <a taget="_new" href="https://twitter.com/CornwallsPub" target="_new">Cornwall's Pub</a> (<a href="https://plus.google.com/events/c011m6b8cd6iqd1rm1hou9fb5pg" target="_new">Friday Oct 18th 7:00 PM</a>), please send us any of the following tweets by clicking the links or send us a message on <a href="http://www.facebook.com/swayspa" target="_new">Facebook</a> or just send us an email at <a href="mailto:sweta@swayspa.com">sweta @ swayspa.com</a>.
                  <ul>
                      <li>- SwaySpa I would love to stop by @CornwallsPub on Oct 18th(<a taget="_new" href="https://twitter.com/home?status=@SwaySpa I would love to stop by @CornwallsPub on Oct 18th">tweet</a>)</li>
                      <li>- DM (personal message) @SwaySpa I would love to stop by @CornwallsPub (<a taget="_new" href="https://twitter.com/home?status=DM @SwaySpa I would love to stop by @CornwallsPub">tweet</a>)</li>
                      <li>- @SwaySpa How do I get the coupon for Oct 18th at @CornwallsPub? (<a taget="_new" href="https://twitter.com/home?status=@SwaySpa How do I get the coupon for Oct 18th at @CornwallsPub?">tweet</a>)</li>
                  </ul>
                  <br /><br />
                                    -->
                  If you have any question, please don't hesitate to reach us at <a href="mailto:sweta@swayspa.com">sweta @ swayspa.com</a>
               </div>
               <!--				<div class="grid_9" >
                  <iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.secure-booker.com/pineappledayspa/MakeAppointment/Search.aspx" width="100%"/>
                  </div>-->
               <div class="clear"></div>
            </div>
         </div>
		
        <div class="slide nondisplayslide" id="Winners" data-stellar-background-ratio="0.5" data-slide="Winners">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Winners</span></h1>
                  <h2></h2>
               </div>
               <div class="clear"></div>
               <div class="grid_12">
                 	<table class="table table-hover">
        <tr>
            <tr>
                <th><strong>Date</strong></th>
                <th><strong>Gift</strong></th>
                <th><strong>Winner</strong>(s)</th>
            </tr>
        </tr>
        <tr>
            <td>06/26/14</td>
            <td><a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/675291842520176/?type=1" target="_new">$30 Facial Gift Certificate</a></td>
            <td>Brenna Belletti</td>
        </tr>
        <tr>
            <td>05/10/14</td>
            <td><a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/652755728107121/?type=1&comment_id=653393974709963&offset=0&total_comments=2" target="_new">$35 Facial Gift Certificate</a></td>
            <td>April Meaden</td>
        </tr>
        <tr>
            <td>05/10/14</td>
            <td><a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/651489624900398/?type=1&comment_id=652812754768085&offset=0&total_comments=1" target="_new">$35 Facial Gift Certificate</a></td>
            <td>Jaimie Allen</td>
        </tr>
        <tr>
            <td>05/10/14</td>
            <td>
                <a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/616436271739067/?type=1&comment_id=1667891&offset=0&total_comments=10" target="_new">$40 Massage Gift Certificate</a> <br />
                <a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/616436271739067/?type=1&comment_id=1668241&offset=0&total_comments=10" target="_new">Not Claimed</a><br />
                <a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/616436271739067/?type=1&comment_id=1668526&offset=0&total_comments=10" target="_new">$40 Massage Gift Certificate</a><br />
                <a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/616436271739067/?type=1&comment_id=1668823&offset=0&total_comments=10" target="_new">$50 Faial Gift Certificate</a><br />
            </td>
            <td>
                Ellie Castine <br />
                Sonja Richter <br />
                Susan Herman <br />
                Priya Ramanathan <br />
            </td>
        </tr>
        <tr>
            <td>01/14/14</td>
            <td><a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/604177116298316/?type=1" target="_new">Not Claimed</a></td>
            <td>Kym Wnuk</td>
        </tr>
        <tr>
            <td>01/11/14</td>
            <td><a href="https://www.facebook.com/SwaySpa/posts/597250913657603" target="_new">$50 Facial Gift Certificate</a></td>
            <td>Jenny Willig</td>
        </tr>
        <tr>
            <td>12/29/14</td>
            <td>
                <a href="https://www.facebook.com/SwaySpa/photos/a.502556793127016.1073741827.447862671929762/596521903730504/?type=1" target="_new">
                    $35 Facial Gift Certificate <br />
                    $35 Facial Gift Certificate
                </a>
            </td>
            <td>
                Haley Danowski<br />
                Erica Thomas
            </td>
        </tr>
    </table>
               </div>
               
               <div class="clear"></div>
            </div>
            
         </div>
        
         <!-------------------------------------------------------------------------->
<!--         <div class="slide nondisplayslide" data-slide="Appointments" id="Appointments" data-stellar-background-ratio="0.5" align="center">
             <iframe id="appointments" name="appointments" src="http://www.secure-booker.com/swayspa/BookOnlineStart.aspx" class="appointmentIframe" frameborder="0"/>
               <div class="clear"></div>
         </div>-->

         <div class="slide nondisplayslide" data-slide="thankyou" id="thankyou" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Thank you!</span></h1>
                  <h2></h2>
               </div>
               <div class="thankyou">
                  I am so looking forward to seeing you at <a taget="_new" href="https://twitter.com/CornwallsPub" target="_new">Cornwall's Pub</a>.  If you are on Google+, would love your <a href="https://plus.google.com/events/c011m6b8cd6iqd1rm1hou9fb5pg" target="_new">RSVP</a>.  Do let your friends on Twitter know about the party!
                  <ul>
                      <li>- Meet @SwaySpa's owners at @CornwallsPub on Oct 18th (<a taget="_new" href="https://twitter.com/home?status=Meet @SwaySpa's owners at @CornwallsPub on Oct 18th http://www.swayspa.com/party #SwaySpaParty">tweet</a>)</li>
                      <li>- I am going to @CornwallsPub on Oct 18th with @SwaySpa (<a taget="_new" href="https://twitter.com/home?status=I am going to @CornwallsPub on Oct 18th with @SwaySpa http://www.swayspa.com/party #SwaySpaParty">tweet</a>)</li>
                      <li>- @SwaySpa is giving $5 coupon for @CornwallsPub on Oct 18th  (<a taget="_new" href="https://twitter.com/home?status=@SwaySpa is giving $5 coupon for @CornwallsPub on Oct 18th http://www.swayspa.com/party #SwaySpaParty">tweet</a>)</li>
                      <li>- I just grabbed a @CornwallsPub's coupon from @SwaySpa for Oct 18th (<a taget="_new" href="https://twitter.com/home?status=I just grabbed a @CornwallsPub's coupon from @SwaySpa for Oct 18th. Get yours here http://www.swayspa.com/party #SwaySpaParty">tweet</a>)</li>
                  </ul>
                  <br /><br />
                  If you have any question, please don't hesitate to reach us at <a href="mailto:sweta@swayspa.com">sweta @ swayspa.com</a>
               </div>
               <!--				<div class="grid_9" >
                  <iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.secure-booker.com/pineappledayspa/MakeAppointment/Search.aspx" width="100%"/>
                  </div>-->
               <div class="clear"></div>
            </div>
         </div>

         <div class="slide nondisplayslide" data-slide="party" id="party" data-stellar-background-ratio="0.5">
            <div class="container clearfix">
               <div id="content" class="grid_12">
                  <h1><span>Party at Cornwall's!</span></h1>
                  <h2></h2>
               </div>
               <div class="party">
                   Thanks for stopping by at Cornwall's.  We missed you if you weren't able to make it :( but will have another celebration soon!
<!--                   <ul>
                       <li>- A $50 Sway Spa gift certificate</li>
                       <li>- A $35 Sway Spa gift certificate</li>
                       <li>- Many $25 Sway Spa gift certificates</li>
                       <li>- Many $5 and $3 coupons for <a taget="_new" href="https://twitter.com/CornwallsPub" target="_new">Cornwall's Pub</a> (<a href="https://plus.google.com/events/c011m6b8cd6iqd1rm1hou9fb5pg" target="_new">Friday Oct 18th 7:00 PM</a>)</li>
                   </ul>
                  Just sign up <a href="#Specials" class="linkAlias">here</a> and you will hear from us! If you have any question, please don't hesitate to reach us at <a href="mailto:sweta@swayspa.com">sweta @ swayspa.com</a><br /><br />-->
               </div> 
               <!--				<div class="grid_9" >
                  <iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.secure-booker.com/pineappledayspa/MakeAppointment/Search.aspx" width="100%"/>
                  </div>-->
               <div class="clear"></div>
            </div>
         </div>

         <div id="footer">
            <div class="container clearfix">
               <div class="copyright">
                  Sway Spa &copy; 2013 <!--                    | <a href="javascript:void(0);">Privacy Policy</a>-->
               </div>
               <div id="back_top">
                  <a class="button link" title="" data-slide="1"></a>
               </div>
            </div>
         </div>
         
          <script>
			$('.carousel').carousel({
				interval: 5000, //changes the speed
				pause: false
			})
			$('.link').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			 })
    	</script>
      </body>
   </html>
   <?php
//      session_destroy();
      ?>