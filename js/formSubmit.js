$(document).ready(function(){
        $("input[name='DMODE']").change(function() {
            if ($("input[name='DMODE']:checked").val() == 'Email me the gift certificate') {
                $("#divAddress").hide('slow');
            } else {
                $("#divAddress").show('slow');
            }
        });
        //Contact form

        $("#ajax-contact-form").submit(function() {
                var str = $(this).serialize();
                $("#contact_btn").val("Please wait...");
                $.ajax({
                        type: "POST",
                        url: "contact_form/contact_process.php",
                        data: str,
                        success: function(msg) {
                                $("#contact_btn").val("Send");
                                // Message Sent - Show the 'Thank You' message and hide the form
                                if(msg == 'OK') {
                                        result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
                                        $("#fields").hide();
                                } else {
                                        result = msg;
                                }
                                $('#note').html(result);
                        }
                });
                return false;
        });
        //Subscribe form
        $("#ajax-subscribe_form").submit(function() {
                var str = $(this).serialize();
                $("#contact_btn_subscribe").val("Please wait...");
                $.ajax({
                        type: "POST",
                        url: "code/mailchimp/subscribe.php",
                        data: str,
                        success: function(msg) {
                                $("#contact_btn_subscribe").val("Send me the gift certificate!");
                                // Message Sent - Show the 'Thank You' message and hide the form
                                if(msg == 'OK' || msg.indexOf('214') > -1) {
                                    if (msg.indexOf('214') > -1)
                                        $("#subscribe_form_note_success_update").show('slow')
                                     else
                                        $("#subscribe_form_note_success").show('slow');
                                     $("#subscribe_form-fields").hide();
                                     $('#subscribe_form_note_error').hide();
                                } else {
                                        $('#subscribe_form_note_error').show();
                                        $('#subscribe_form_note_error').html(msg);
                                }
                                
                        }
                });
                return false;
        });
});