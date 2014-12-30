<?php
include_once '../ChromePhp.php';
include_once 'mailchimpInclude.php';
include_once '../includes/email_validation.php';

$errorMessage="";

$fname = stripslashes($_POST['FNAME']);
$lname = stripslashes($_POST['LNAME']);
$email = trim($_POST['EMAIL']);
$giftcert = stripslashes($_POST['GCERT']);
$deliveryMode = stripslashes($_POST['DMODE']);
$addr1 = trim($_POST['addr1']);
$addr2 = trim($_POST['addr2']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$zip = trim($_POST['zip']);
$referrer = trim($_POST['REFERREDBY']);
$source = trim($_POST['SOURCE']);
$raffle = $_POST['RAFFLE'];
#ChromePhp::log("raffle: " . $raffle);


if ($fname == "") {
    $errorMessage = "Please provide your first name.";
}
if (!ValidateEmail($email)) {
    $errorMessage = $errorMessage . "<br> Please provide a valid email address.";
}
if ($deliveryMode == "Send me via postal mail") {
    if ($addr1 == "")
        $errorMessage = $errorMessage . "<br> Please provide your Street Address.";
    if ($city == "")
        $errorMessage = $errorMessage . "<br> Please provide your City.";
    if ($state == "")
        $errorMessage = $errorMessage . "<br> Please provide your State.";
    if ($zip == "")
        $errorMessage = $errorMessage . "<br> Please provide your Zip.";

}
if ($errorMessage != "") {
    echo $errorMessage;
} else {
    $listId=$masterListId;
//    ChromePhp::log("listId: " . $listId);
    $email=$email;
    $merges = array('FNAME'=> $fname,
                        'LNAME'=> $lname,
                        'GCERT'=> $giftcert,
                        'DMODE'=>$deliveryMode,
                        'ADDRESS'=>array('addr1'=>$addr1,
                                         'addr2'=>$addr2,
                                         'city'=>$city, 'state'=>$state, 'zip'=>$zip),
                         'REFERREDBY'=>$referrer,
                         'SOURCE'=>$source,
                         'GROUPINGS'=>array(
                              array('name'=>'Raffle', 'groups'=>$raffle),
                             )
                        );

    $double_optin=true;
    $update_existing=false;
    $replace_interests=true;
    $send_welcome=false;
    $email_type = 'html';

    $requestdata = array(
            'email_address'=>$email,
            'apikey'=>$apikey,
            'merge_vars' => $merges,
            'id' => $listId,
            'double_optin' => $double_optin,
            'update_existing' => $update_existing,
            'replace_interests' => $replace_interests,
            'send_welcome' => $send_welcome,
            'email_type' => $email_type
        );
    $payload = json_encode($requestdata);

    $submit_url = "https://us4.api.mailchimp.com/1.3/?method=listSubscribe";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $submit_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));

    $result = curl_exec($ch);
    curl_close ($ch);
    $responseData = json_decode($result);
    $response = "";
    $adminBody = "";
    $adminSubject = "";
    if ($responseData->error){
        if ($responseData->code == 214) {
            #Subscriber exists, strip the actual response as someone may see it on the browser
            $response = "214 Subscriber already exists";
            $submit_url = "https://us4.api.mailchimp.com/1.3/?method=listSubscribe";

            $update_existing=true;
            $requestdata = array(
                    'email_address'=>$email,
                    'apikey'=>$apikey,
                    'merge_vars' => $merges,
                    'id' => $listId,
                    'double_optin' => $double_optin,
                    'update_existing' => $update_existing,
                    'replace_interests' => $replace_interests,
                    'send_welcome' => $send_welcome,
                    'email_type' => $email_type
                );
            $payload = json_encode($requestdata);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $submit_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));

            $result = curl_exec($ch);
            curl_close ($ch);
            $responseData = json_decode($result);
            $updateresponse = "";
            if ($responseData->error){
                $response = "Oops!  Could not update user preference :( " . $responseData->code .' : '.$responseData->error."\n";
                $adminSubject = "$email already exists.  Could not update $responseData->code";
                $adminBody = "$response \n";
            } else {
                $response = "214 Subscriber already exists.  Successfully updated";
                $adminSubject = "Sway Spa Subscription Existing $email updated";
            }

        } else
            $response = $responseData->code .' : '.$responseData->error."\n";
            $adminSubject = "Sway Spa Subscription $email unknown error";
            $adminBody = "$response \n";
    } else {
        $response = "OK";
        $adminSubject = "Sway Spa Subscription $email $fname";
    }


    foreach($merges as $key => $value) {
        if (is_array($value)) {
            foreach($value as $key2 => $value2) {
                if (is_array($value2)) {
                    foreach($value2 as $key3 => $value3) {
                        $adminBody = $adminBody . "\n\t$key3: $value3 \n";
                    }
                } else {
                    $adminBody = $adminBody . "\n\t$key2: $value2 \n";
                }
            }
        }
        else {
            $adminBody = $adminBody . "$key: $value \n";
        }
    }
    
    $adminBody = $adminBody .
    "\n\n Sway Spa in Kenmore Square" .
    "\n\nHi $fname, \n\n " .
    "You recently signed up for a complementary gift certificate on our site.  We haven't however received confirmation from you by acknowledging the email that we sent.  Please look for the email with subject \"Please Confirm Your Email\" and click on confirmation link. Without that confirmation, our system won't be able to send you the gift certificate. \n\n " .
    "Thanks again for your interest.  We look forward to serving you soon at Sway Spa.\n\n" .
    "Regards\n" .
    "Sweta\n\n" .
    "PS: Don't forget to check your junk email if you don't see it in your inbox.  Please feel free to respond to this email if you have any questions.";

    mail("ajay@swayspa.com", $adminSubject, $adminBody, "From: Sweta (Sway Spa) <sweta@swayspa.com>");
    ChromePhp::log("Response: " . $response);
    ChromePhp::log("Mail sent: " . $adminBody);
    echo $response;
    /*


    $masterList="https://us4.api.mailchimp.com/1.3/?output=json&method=listMemberInfo&apikey=bc31e27e077e61bfa32b22082ed6fb87-us4&id=c6a42a5b06&email_address=ajay@ajaygoel.com";

    $merge_vars = array('FNAME'=>'Ajay',
                        'LNAME'=>'Goel',
                        'GCERT'=>'20_Facial',
                        'DMODE'=>'Email'
                        );
    ChromePhp::log($merge_vars);
    $subscribeUrl = "https://us4.api.mailchimp.com/1.3/?output=json&method=listSubscribe&apikey=bc31e27e077e61bfa32b22082ed6fb87-us4&id=c6a42a5b06&output=json&email_address=ajay1@ajaygoel.com&merge_vars=" . $merge_vars;


    $curlResource = curl_init($subscribeUrl);
    curl_setopt($curlResource, CURLOPT_RETURNTRANSFER, TRUE);
    $mailChimpResponse = curl_exec($curlResource);
    curl_close ($curlResource);
    header('Content-type: application/json');
    $encoded = json_encode($mailChimpResponse);
    exit ($encoded);
    /*



    $emailAddress = $_POST["email_address"];
    $interest = urlencode("Newsletter");
    $interestValue = urlencode("Subscribed via Website Footer");
    $curlResource = curl_init("http://us1.api.mailchimp.com/1.2/?output=json&method=listMemberInfo&apikey=e65e2999d4408a381a38140bd07807af-us1&id=306f3b1145&email_address=" . $emailAddress);
    curl_setopt($curlResource, CURLOPT_RETURNTRANSFER, TRUE);
    $mailChimpResponse = curl_exec($curlResource);
    curl_close ($curlResource);
    if (strpos($mailChimpResponse ,":232") > -1) {

                    $response["subscriptiontype"] = "new";
                    $encodedUrl = "http://us1.api.mailchimp.com/1.3/?method=listSubscribe&apikey=e65e2999d4408a381a38140bd07807af-us1&id=306f3b1145&output=json&update_existing=true&replace_interests=true&merge_vars[INTERESTS]=" . $interestValue . "&email_address=" . $emailAddress;
                    $curlResource = curl_init($encodedUrl);
                    curl_setopt($curlResource, CURLOPT_RETURNTRANSFER, TRUE);
                    $mailChimpResponse2 = curl_exec($curlResource);
                    if ($mailChimpResponse2 != true) {
                            //System.out.println("MailChimp Error: " + mailChimpResponse2);
                            $response["status"] = "failure";
                            $response["reason"] = $mailChimpResponse2;
                    } else
                            $response['status'] = "success";
    } else {
                    $response["subscriptiontype"] = "existing";
                    $encodedUrl = "http://us1.api.mailchimp.com/1.3/?output=json&method=listSubscribe&apikey=e65e2999d4408a381a38140bd07807af-us1&id=306f3b1145&update_existing=true&replace_interests=true&merge_vars[GROUPINGS][0][name]=" . $interest . "&merge_vars[GROUPINGS][0][groups]="  . $interestValue . "&email_address=" . $emailAddress;;
                    $curlResource = curl_init($encodedUrl);
                    curl_setopt($curlResource, CURLOPT_RETURNTRANSFER, TRUE);
                    $mailChimpResponse2 = curl_exec($curlResource);
                    if ($mailChimpResponse2 != true) {
                            //System.out.println("MailChimp Error: " + mailChimpResponse2);
                            $response["status"] = "failure";
                            $response["reason"] = $mailChimpResponse2;
                    } else
                            $response['status'] = "success";
    }

    header('Content-type: application/json');
    $encoded = json_encode($response);
    exit ($encoded);
    */
}
?>
