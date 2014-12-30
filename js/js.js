var loading;
jQuery(document).ready(function ($) {
loading = true;

//if (window.parent.location.href.indexOf('ID=') > -1) {
//    window.parent.location.href='http://swayspa.com';
//}

if(!Modernizr.input.placeholder){

	jQuery('[placeholder]').focus(function() {
	  var input = jQuery(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = jQuery(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	jQuery('[placeholder]').parents('form').submit(function() {
	  jQuery(this).find('[placeholder]').each(function() {
		var input = jQuery(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});

}

    $(window).resize(function() {
        if ($(window).width() < 1000) {
            $('#headerAddress').hide();
			$('#socialn').hide();
        }
    });

    //Mobile browser detected
    if(jQuery.browser.mobile || $(window).width() < 1000)
    {
       $('#headerAddress').hide();
	   $('#socialn').hide();
	   
//       $('#socialn').hide();
//       $('#socialn').height('0');
       $('#pin').hide();
       if (jQuery.browser.mobile) {
           //Add code for mobile
           //$('#likeUsOnFacebookForMore').hide();
       }
    }

    $("#ajax-subscribe_form").submit( function() {
        $('html, body').animate({
             scrollTop: $("#form-result").offset().top
        }, 2000);
        return false;
        });


    $(window).stellar();

    var links = $('.navigation').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');


    slide.waypoint(function (event, direction) {

        dataslide = $(this).attr('data-slide');
        if (direction === 'down') {
            //While moving down, hide all the nondisplayslide when the user is scrolling down
            //See notes in index page
            if (dataslide == '4' && !loading) {
                $(".nondisplayslide").hide();
            }
                
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
        }
        else {
            $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
        }

    });

    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigation li[data-slide="1"]').addClass('active');
            $('.navigation li[data-slide="2"]').removeClass('active');
        }
    });

    function goToByScroll(dataslide) {
        if ($('.slide[data-slide="' + dataslide + '"]').offset() != null) {
            htmlbody.animate({
                scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
            }, 2000, 'easeInOutQuint');
        }
    }


    links.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
        window.location.href=this.baseURI + "#" + this.id;
        $(".nondisplayslide").hide();


        $(".submenu").hide('slow');
        $("#Services").removeClass('headerwithsubmenu');
        $("#Contact").removeClass('headerwithsubmenu');

        switch($(this).attr('id'))
        {
            case "Services":
                $(this).addClass('headerwithsubmenu');
                $("#submenu_services").show('slow');
                break;
            case "Contact":
                $("#submenu_contact").show('slow');
                $(this).addClass('headerwithsubmenu');
                break;
        }

    });

    button.click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);

    });

	//prettyPhoto
	$("a[rel^='prettyPhoto']").prettyPhoto();




	$('#modal_nails').click(function (e) {
		$('#content_nail').modal();
	});

	$('#modal_facials').click(function (e) {
		$('#content_facials').modal();
	});
	$('#modal_waxing').click(function (e) {
		$('#content_waxing').modal();
	});
	$('#modal_massage').click(function (e) {
		$('#content_massage').modal();
	});


	/******************************************/
	$('.submenu').find('li').click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
	});

	$('.gallery-list').find('li').click(function (e) {
        e.preventDefault();
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
	});


        $(".linkAlias").click(function() {
            $($(this).attr("href")).click();
            return false;
        });

    //Miscllaneous stuff
    //Change the subject of the contact form if Aveda Off Image is clicked
    $("#10PercentOff").click(function () {
        $("#contactSubject").val('10% off Aveda products');
    });

//    $("#GiftCards").click(function () {
//        window.location.href='http://swayspa.com/gift-certificates';
////        $("#contactSubject").val('Holiday Gifts Inquiry');
//    });

    $("#appointmentsMenu").click(function () {
        window.location.href='http://swayspa.com/appointments';
    });

    $("#giftCertificateMenu").click(function () {
        window.location.href='http://swayspa.com/gift-certificates';
    });
    
    $("#giftCardMenu").click(function () {
        window.location.href='http://swayspa.com/gift-cards';
    });

});


$(window).load(function(){
     if (window.location.href.indexOf('#')  > -1) {
         hiddenSlide = window.location.href.split('#')[1];
         $(".nondisplayslide").each(function() {
             if ($ (this).attr('id') != hiddenSlide) {
                 $ (this).hide();
             } else {
                 $ (this).show();
             }
         });
     }
     loading = false;
});